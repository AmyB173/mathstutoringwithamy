<?php
require_once('../vendor/autoload.php');
require_once('../config.php');

// Use the SECRET key here, not the publishable one
\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

try {
    $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            'price' => STRIPE_PRICE_ID_STUDY_CLUB_CURRENT,
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        'allow_promotion_codes' => true,
        'success_url' => 'https://mathstutoringwithamy.co.uk/success-study-club?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url'  => '',
    ]);

    // Redirect user to Stripe Checkout
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);
    exit;

} catch (\Stripe\Exception\ApiErrorException $e) {
    echo "Stripe API Error: " . $e->getMessage();
}
?>
