<?php
// --- GET CUSTOMER DATA FROM SESSION ---
session_start();

// --- SETUP AND CONFIGURATION ---

// Include the Stripe PHP library managed by Composer to interact with the Stripe API.
require_once __DIR__ . '/../vendor/autoload.php';

// This now points two levels up, to the main project root
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();


// Authenticate with the Stripe API by setting your secret key.
\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

// Retrieve the customer data from the session (from your details form)
$customer_name = $_SESSION['customer_name'] ?? null;
$customer_email = $_SESSION['customer_email'] ?? null;
$exam_board = $_SESSION['exam_board'] ?? null;
$parent_email = $_SESSION['parent_email'] ?? null;
$current_grade = $_SESSION['current_grade'] ?? null;
$target_grade = $_SESSION['target_grade'] ?? null;

// Validate that we have the required data
if (!$customer_name || !$customer_email) {
    // Redirect back to the details form if data is missing
    header("Location: ../study-club-sign-up-form.php");
    exit();
}

// --- BILLING LOGIC ---

// Create a new DateTime object representing the first day of the NEXT month.
$first_of_next_month = new DateTime('first day of next month');
// Convert this date into a Unix timestamp, which Stripe requires for dates.
// This sets the anchor date for all future recurring billing cycles.
$billing_cycle_anchor = $first_of_next_month->getTimestamp();

// --- STRIPE CHECKOUT SESSION CREATION ---

// Use a try-catch block to gracefully handle any potential errors from the Stripe API.
try {
    // First, create the customer with metadata
    $customer = \Stripe\Customer::create([
        'name' => $customer_name,
        'email' => $customer_email,
        'metadata' => [
            'exam_board' => $exam_board,
            'parent_email' => $parent_email,
            'current_grade' => $current_grade,
            'target_grade' => $target_grade,
            'signup_source' => 'study_club_website',
            'signup_date' => date('Y-m-d H:i:s')
        ]
    ]);

    // Create a new Stripe Checkout Session. This is the secure, Stripe-hosted page
    // where the customer enters their payment details.
    $checkout_session = \Stripe\Checkout\Session::create([
        
        // Define the product(s) the customer is purchasing.
        'line_items' => [[
            // 'price' specifies the Stripe Price ID for your subscription product.
            'price' => $_ENV['STRIPE_PRICE_ID_STUDY_CLUB_CURRENT'],
            // 'quantity' is typically 1 for a standard subscription.
            'quantity' => 1,
        ]],
        
        // Set the mode to 'subscription' to create a recurring payment.
        'mode' => 'subscription',
        
        // Use the customer we just created
        'customer' => $customer->id,
        
        // Pass specific instructions for the subscription that will be created.
        'subscription_data' => [
            // Set the billing anchor to the 1st of next month
            // This should automatically prorate the first period
            'billing_cycle_anchor' => $billing_cycle_anchor,
        ],
        
        // Pass additional metadata to the session itself
        'metadata' => [
            'exam_board' => $exam_board,
            'parent_email' => $parent_email,
            'current_grade' => $current_grade,
            'target_grade' => $target_grade,
        ],
        
        // The URL to redirect the customer to after a successful payment.
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success-study-club.php?session_id={CHECKOUT_SESSION_ID}',
        
        // The URL to redirect the customer to if they cancel the checkout process.
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club-sign-up-form.php',
    ]);

    // Clear the session data since we've used it
    session_destroy();

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