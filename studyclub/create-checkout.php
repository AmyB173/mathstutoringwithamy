<?php
// --- SETUP AND CONFIGURATION ---

// Include the Stripe PHP library, which is managed by Composer.
require_once('../vendor/autoload.php');

// Include your local configuration file.
require_once('../config.php');

// Authenticate with the Stripe API by setting your secret key.
\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// --- BILLING LOGIC ---

// Create a new DateTime object representing the first day of the next month.
$first_of_next_month = new DateTime('first day of next month');

// Convert this date into a Unix timestamp for Stripe.
$billing_cycle_anchor = $first_of_next_month->getTimestamp();

// --- STRIPE CHECKOUT SESSION CREATION ---

try {
    // Create a new Stripe Checkout Session.
    $checkout_session = \Stripe\Checkout\Session::create([
        
        // Define the items the customer is purchasing.
        'line_items' => [[
            'price' => STRIPE_PRICE_ID_STUDY_CLUB_CURRENT,
            'quantity' => 1,
        ]],
        
        // Set the mode to 'subscription'.
        'mode' => 'subscription',
        
        // Pass specific data to the subscription object.
        'subscription_data' => [
            // Anchor future billing cycles to the 1st of the month.
            'billing_cycle_anchor' => $billing_cycle_anchor,
            
            // *** THE FINAL CORRECTION ***
            // Use 'always_invoice' to immediately create an invoice for the prorated amount
            // and charge the customer at the time of checkout.
            'proration_behavior' => 'always_invoice',
        ],
        
        // Redirect URL after a successful payment.
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success-study-club.php?session_id={CHECKOUT_SESSION_ID}',
        
        // Redirect URL if the customer cancels.
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php',
    ]);

    // --- REDIRECTION ---

    // Redirect the customer's browser to the Stripe Checkout page.
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);

} catch (\Stripe\Exception\ApiErrorException $e) {
    // Display an error if the API call fails.
    echo "Stripe API Error: " . $e->getMessage();
}
?>