<?php
// webhook.php
ini_set('error_log', __DIR__ . '/webhook_log.txt');
// This script listens for notifications from Stripe and triggers actions accordingly.

// Step 1: Include necessary files
require_once('../vendor/autoload.php');
require_once('../config.php'); // Contains your Stripe keys and webhook secret
require_once('email-handler.php'); // Contains the function to send the email

// Step 2: Set the Stripe API key
\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// Step 3: Retrieve the webhook payload and signature from the request
$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'] ?? null;
$event = null;

// Log the webhook attempt
error_log("Webhook received at " . date('Y-m-d H:i:s'));

try {
    // Step 4: Verify the event is genuine and from Stripe
    $event = \Stripe\Webhook::constructEvent(
        $payload, $sig_header, STRIPE_WEBHOOK_SECRET
    );
    
    // Log successful verification
    error_log("Webhook verified successfully. Event type: " . $event->type);
    
} catch(\UnexpectedValueException $e) {
    // Invalid payload
    error_log("Webhook Error: Invalid payload - " . $e->getMessage());
    http_response_code(400);
    exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
    // Invalid signature
    error_log("Webhook Error: Invalid signature - " . $e->getMessage());
    http_response_code(400);
    exit();
} catch(Exception $e) {
    // Other errors
    error_log("Webhook Error: " . $e->getMessage());
    http_response_code(400);
    exit();
}

// Step 5: Handle the specific event type
if ($event->type == 'checkout.session.completed') {
    $session = $event->data->object; // contains a \Stripe\Checkout\Session
    
    // Log session details for debugging
    error_log("Processing checkout.session.completed for session: " . $session->id);
    
    // Get customer details from the session
    $customer_name = $session->customer_details->name ?? 'Study Club Member';
    $customer_email = $session->customer_details->email ?? null;
    
    // Log customer details
    error_log("Customer details - Name: {$customer_name}, Email: {$customer_email}");
    
    // Additional session information you might want to log
    $subscription_id = $session->subscription ?? null;
    $payment_status = $session->payment_status ?? null;
    
    if ($subscription_id) {
        error_log("Subscription created: " . $subscription_id);
    }
    
    // Send the welcome email
    if ($customer_email) {
        error_log("Attempting to send welcome email to: " . $customer_email);
        
        $email_sent = sendWelcomeEmail($customer_name, $customer_email);
        
        if ($email_sent) {
            error_log("Welcome email sent successfully to: " . $customer_email);
        } else {
            error_log("Failed to send welcome email to: " . $customer_email);
            // Don't exit with error - we still want to acknowledge the webhook
        }
    } else {
        error_log("Warning: No customer email found in session");
    }
    
    // You might want to store the customer in a database here
    // Example (uncomment and modify if you have a database):
    /*
    try {
        // Connect to database and store customer
        $db = new PDO('mysql:host=localhost;dbname=your_db', 'username', 'password');
        $stmt = $db->prepare("INSERT INTO study_club_members (name, email, stripe_subscription_id, joined_date) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$customer_name, $customer_email, $subscription_id]);
        error_log("Customer saved to database");
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
    }
    */
    
} else if ($event->type == 'customer.subscription.deleted') {
    // Handle subscription cancellation
    $subscription = $event->data->object;
    error_log("Subscription cancelled: " . $subscription->id);
    
    // You might want to send a cancellation email or update your database
    // Example:
    /*
    $customer_email = $subscription->customer_email ?? null;
    if ($customer_email) {
        // Send cancellation email
        // Update database to mark as inactive
    }
    */
    
} else if ($event->type == 'invoice.payment_failed') {
    // Handle failed payment
    $invoice = $event->data->object;
    error_log("Payment failed for invoice: " . $invoice->id);
    
    // You might want to send a payment failure notification
    
} else {
    // Log any other event types for monitoring
    error_log("Received webhook event: " . $event->type);
}

// Step 6: Respond to Stripe to acknowledge receipt of the event
http_response_code(200);

// Log successful completion
error_log("Webhook processing completed successfully");

?>