<?php
// --- SETUP AND CONFIGURATION ---

require_once('../vendor/autoload.php');
require_once('../config.php');

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// --- BILLING AND DATE LOGIC ---

// Set your currency and the full monthly price in the smallest unit (e.g., pence for GBP)
$currency = 'gbp';
$full_monthly_price_in_pence = 3500; // This is £35.00

// Get today's date and the first day of the NEXT month
$today = new DateTime();
$first_of_next_month = new DateTime('first day of next month');
$end_of_this_month = new DateTime('last day of this month');

// Calculate the number of days remaining in the current month (including today)
$days_remaining_in_month = $end_of_this_month->diff($today)->days + 1;
$days_in_current_month = (int)$today->format('t');

// Calculate the prorated amount for the rest of this month
$prorated_amount_in_pence = ($full_monthly_price_in_pence / $days_in_current_month) * $days_remaining_in_month;

// Define the final cancellation date for the subscription
$cancellation_date = new DateTime('2026-06-23');
$cancellation_timestamp = $cancellation_date->getTimestamp();

// --- STRIPE CHECKOUT SESSION CREATION ---

try {
    // Create a new Stripe Checkout Session
    $checkout_session = \Stripe\Checkout\Session::create([
        // Set the mode to 'subscription' which allows for both one-time and recurring items
        'mode' => 'subscription',
        'line_items' => [
            [
                // --- ITEM 1: THE IMMEDIATE PRORATED CHARGE ---
                'price_data' => [
                    'currency' => $currency,
                    'unit_amount' => round($prorated_amount_in_pence), // The calculated prorated amount
                    'product_data' => [
                        'name' => 'Prorated payment for the remainder of this month',
                    ],
                ],
                'quantity' => 1,
            ],
            [
                // --- ITEM 2: THE RECURRING MONTHLY SUBSCRIPTION ---
                'price' => STRIPE_PRICE_ID_STUDY_CLUB_CURRENT, // Your existing recurring price ID
                'quantity' => 1,
            ],
        ],
        
        'subscription_data' => [
            // Start the subscription with a free trial that lasts until the 1st of next month.
            // This ensures the first full payment is not collected until then.
            'trial_end' => $first_of_next_month->getTimestamp(),
            // Automatically cancel the subscription on the specified end date.
            'cancel_at' => $cancellation_timestamp,
        ],
        
        // Redirect URLs
        'success_url' => 'https://www.mathstutoringwithamy.co.uk/success-study-club.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => 'https://www.mathstutoringwithamy.co.uk/study-club.php',
    ]);

    // --- REDIRECTION ---
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);

} catch (\Stripe\Exception\ApiErrorException $e) {
    // Display an error if the API call fails.
    echo "Stripe API Error: " . $e->getMessage();
}
?>