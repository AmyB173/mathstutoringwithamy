<?php 
// --- Temporary Error Reporting ---
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// This loads the Stripe PHP library
require_once('vendor/autoload.php');

// This securely loads your secret keys
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
            'price' => STRIPE_PRICE_ID,
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        
        // --- THIS IS THE CORRECT STRUCTURE ---
        // Both billing anchor and cancel_at belong to the subscription,
        // so they go inside the 'subscription_data' object.
        'subscription_data' => [
            'billing_cycle_anchor' => $billing_cycle_anchor,
            'cancel_at' => $cancellation_date,
        ],
        // ------------------------------------

        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php',
    ]);

    // Redirect the customer to Stripe's checkout page
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);

} catch (\Stripe\Exception\ApiErrorException $e) {
    echo "Stripe API Error: " . $e->getMessage();
} catch (Error $e) {
    echo "Error: " . $e->getMessage();
}
?>