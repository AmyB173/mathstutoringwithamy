<?php 
require_once('../vendor/autoload.php');
require_once('../config.php');

\Stripe\Stripe::setApiKey(STRIPE_API_KEY);
// ... billing cycle anchor logic ...

try {
    $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            // This now points to your single "active" price ID
            'price' => STRIPE_PRICE_ID_STUDY_CLUB_CURRENT,
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        // ... rest of file is the same ...
    ]);
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);
} catch (\Stripe\Exception\ApiErrorException $e) {
    echo "Stripe API Error: " . $e->getMessage();
}
?>