<?php
// --- SETUP AND CONFIGURATION ---

// Include the Stripe PHP library, which is managed by Composer.
// The 'vendor/autoload.php' file loads all the necessary classes for Stripe to work.
require_once('../vendor/autoload.php');

// Include your local configuration file.
// This file should contain your secret keys and price IDs (e.g., STRIPE_SECRET_KEY).
require_once('../config.php');

// Authenticate with the Stripe API by setting your secret key.
// All subsequent Stripe API requests will use this key.
\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// --- BILLING LOGIC ---

// Create a new DateTime object representing the first day of the next month.
$first_of_next_month = new DateTime('first day of next month');

// Convert this date into a Unix timestamp (the number of seconds since Jan 1, 1970).
// Stripe uses timestamps to handle dates and times. This will be the anchor date for all future billing cycles.
$billing_cycle_anchor = $first_of_next_month->getTimestamp();

// --- STRIPE CHECKOUT SESSION CREATION ---

// Use a try-catch block to handle any potential errors from the Stripe API.
try {
    // Create a new Stripe Checkout Session. This is the secure, Stripe-hosted page where your customer will enter their payment details.
    $checkout_session = \Stripe\Checkout\Session::create([
        
        // Define the items the customer is purchasing.
        'line_items' => [[
            // 'price' specifies the Stripe Price ID for the product (e.g., your Study Club subscription).
            'price' => STRIPE_PRICE_ID_STUDY_CLUB_CURRENT,
            // 'quantity' is the number of units being purchased. For a subscription, this is usually 1.
            'quantity' => 1,
        ]],
        
        // Set the mode to 'subscription' to indicate you are creating a recurring payment.
        'mode' => 'subscription',
        
        // Pass specific data to the subscription object that will be created.
        'subscription_data' => [
            // Set the billing anchor. This ensures that after the initial payment,
            // all future recurring charges will happen on the 1st of the month.
            'billing_cycle_anchor' => $billing_cycle_anchor,
            
            // *** THIS IS THE CORRECT LOCATION ***
            // Tells Stripe how to handle the time between signup and the billing anchor.
            // 'create_prorations' means Stripe will immediately charge the customer a partial amount
            // to cover the period from today until the first of next month.
            'proration_behavior' => 'create_prorations',
        ],
        
        // The URL to redirect the customer to after a successful payment.
        // {CHECKOUT_SESSION_ID} is a Stripe variable that passes the unique session ID back to your site.
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success-study-club.php?session_id={CHECKOUT_SESSION_ID}',
        
        // The URL to redirect the customer to if they cancel the checkout process.
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php',
    ]);

    // --- REDIRECTION ---

    // After successfully creating the session, send an HTTP 303 "See Other" response.
    // This tells the browser to redirect to a new URL.
    header("HTTP/1.1 303 See Other");
    
    // Redirect the customer's browser to the URL of the Stripe Checkout page.
    header("Location: " . $checkout_session->url);

} catch (\Stripe\Exception\ApiErrorException $e) {
    // If the Stripe API returns an error (e.g., invalid API key, incorrect price ID),
    // catch the exception and display a user-friendly error message.
    echo "Stripe API Error: " . $e->getMessage();
}
?>