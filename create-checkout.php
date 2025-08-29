<?php

// This line loads the Stripe PHP library
require_once('vendor/autoload.php');

// This line securely loads your secret keys from the new config file
require_once('config.php');

// Set your secret key from the config file
\Stripe\Stripe::setApiKey(STRIPE_API_KEY);

// --- Date Calculations ---
$first_of_next_month = new DateTime('first day of next month');
$billing_cycle_anchor = $first_of_next_month->getTimestamp();

$cancellation_date = strtotime("24 June " . (date("Y") + 1));

try {
    // Create the Checkout Session
    $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            'price' => STRIPE_PRICE_ID, // Use the Price ID from the config file
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        
        // --- This is where we define the custom subscription logic ---
        'subscription_data' => [
            // Prorate the first payment and bill on the 1st of the month.
            'billing_cycle_anchor' => $billing_cycle_anchor,
            // Automatically cancel the subscription on the specified date.
            'cancel_at' => $cancellation_date,
        ],
        // --- Redirect URLs ---
        // The page the customer will be sent to if the payment is successful.
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success.php?session_id={CHECKOUT_SESSION_ID}',
        // The page the customer will be sent to if they cancel.
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php',
    ]);

    // After creating the session, redirect the customer to Stripe's hosted checkout page.
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);

} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}