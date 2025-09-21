<?php
session_start();

// --- SETUP AND CONFIGURATION ---
require_once __DIR__ . '/../vendor/autoload.php';

// --- ENVIRONMENT AWARE .env loading ---

// Define the path for the live server (two levels up)
$dotenv_path = dirname(__DIR__, 2);

// If the file doesn't exist at the live path, assume we're local and try one level up
if (!file_exists($dotenv_path . '/.env')) {
    $dotenv_path = dirname(__DIR__);
}

// Load the .env file from the correct path
$dotenv = Dotenv\Dotenv::createImmutable($dotenv_path);
$dotenv->load();

// --- End of new code ---

// --- STRIPE SETUP ---
\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

// --- RETRIEVE CUSTOMER DATA ---
$customer_name = $_SESSION['customer_name'] ?? null;
$customer_email = $_SESSION['customer_email'] ?? null;
$parent_email = $_SESSION['parent_email'] ?? null;

// Validate that we have the required data
if (!$customer_name || !$customer_email) {
    header("Location: ../study-club.php?error=data_missing#signup");
    exit();
}

// --- BILLING LOGIC ---
$first_of_next_month = new DateTime('first day of next month');
$billing_cycle_anchor = $first_of_next_month->getTimestamp();

// --- STRIPE CHECKOUT SESSION CREATION ---
try {
    // Create the Stripe Customer object
    $customer = \Stripe\Customer::create([
        'name' => $customer_name,
        'email' => $customer_email,
        'metadata' => [
            'parent_email' => $parent_email,
            'signup_source' => 'study_club_website',
            'signup_date' => date('Y-m-d H:i:s')
        ]
    ]);

    // Create the Stripe Checkout Session
    $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            'price' => $_ENV['STRIPE_PRICE_ID_STUDY_CLUB_CURRENT'],
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        'customer' => $customer->id,
        'subscription_data' => [
            'billing_cycle_anchor' => $billing_cycle_anchor,
        ],
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success-study-club.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php', // Corrected cancel URL
    ]);

    // Clear the session data now that we've used it
    session_destroy();

    // Redirect to Stripe Checkout
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);

} catch (\Stripe\Exception\ApiErrorException $e) {
    error_log("Stripe Checkout Error: " . $e->getMessage());
    // You might want to redirect to an error page here
    echo "Sorry, something went wrong with the payment processor. Please try again later.";
}
?>