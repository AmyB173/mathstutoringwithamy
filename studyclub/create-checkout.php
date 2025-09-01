<?php
// --- SETUP AND CONFIGURATION ---

// Include the Stripe PHP library managed by Composer to interact with the Stripe API.
require_once('../vendor/autoload.php');
// Include your local configuration file, which holds your secret keys and price IDs.
require_once('../config.php');

// Authenticate with the Stripe API by setting your secret key.
\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// --- BILLING LOGIC ---

// Create a new DateTime object representing the first day of the NEXT month.
$first_of_next_month = new DateTime('first day of next month');
// Convert this date into a Unix timestamp, which Stripe requires for dates.
// This sets the anchor date for all future recurring billing cycles.
$billing_cycle_anchor = $first_of_next_month->getTimestamp();

// --- STRIPE CHECKOUT SESSION CREATION ---

// Use a try-catch block to gracefully handle any potential errors from the Stripe API.
try {
    // Create a new Stripe Checkout Session. This is the secure, Stripe-hosted page
    // where the customer enters their payment details.
    $checkout_session = \Stripe\Checkout\Session::create([
        
        // Define the product(s) the customer is purchasing.
        'line_items' => [[
            // 'price' specifies the Stripe Price ID for your subscription product.
            'price' => STRIPE_PRICE_ID_STUDY_CLUB_CURRENT,
            // 'quantity' is typically 1 for a standard subscription.
            'quantity' => 1,
        ]],
        
        // Set the mode to 'subscription' to create a recurring payment.
        'mode' => 'subscription',
        
        // Pass specific instructions for the subscription that will be created.
        'subscription_data' => [
            // Set the trial to end at the 1st of next month
            // This should automatically create a prorated charge for the current period
            // and then start normal monthly billing from the 1st
            'trial_end' => $billing_cycle_anchor,
        ],
        
        // The URL to redirect the customer to after a successful payment.
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success-study-club.php?session_id={CHECKOUT_SESSION_ID}',
        
        // The URL to redirect the customer to if they cancel the checkout process.
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php',
    ]);

    // --- REDIRECTION ---

    // After successfully creating the session, send an HTTP 303 response to redirect the browser.
    header("HTTP/1.1 303 See Other");
    // Redirect the customer's browser to the URL of the Stripe Checkout page.
    header("Location: " . $checkout_session->url);

} catch (\Stripe\Exception\ApiErrorException $e) {
    // If the Stripe API returns an error, catch it and display a clear message.
    echo "Stripe API Error: " . $e->getMessage();
    // Log the error for debugging
    error_log("Stripe Checkout Error: " . $e->getMessage());
}
?>