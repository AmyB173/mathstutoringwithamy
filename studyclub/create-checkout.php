<?php 
require_once('../vendor/autoload.php');
require_once('../config.php');

\Stripe\Stripe::setApiKey(STRIPE_API_KEY);

$first_of_next_month = new DateTime('first day of next month');
$billing_cycle_anchor = $first_of_next_month->getTimestamp();

try {
    $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            'price' => STRIPE_PRICE_ID,
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        'subscription_data' => [
            'billing_cycle_anchor' => $billing_cycle_anchor,
        ],
        // The success_url is now very important
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success-study-club.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php',
    ]);

    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);

} catch (\Stripe\Exception\ApiErrorException $e) {
    echo "Stripe API Error: " . $e->getMessage();
}
?>