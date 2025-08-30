<?php
/**
 * webhook.php
 *
 * This script serves as the single endpoint for receiving and processing all
 * webhook events from your Stripe account. It verifies the authenticity of
 * each event, identifies the product involved, and triggers the appropriate
 * actions, such as interacting with the MailerLite API.
 */

// -----------------------------------------------------------------------------
// SECTION 1: INITIAL SETUP
// -----------------------------------------------------------------------------
// This section includes necessary files and configures the Stripe API.

ini_set('error_log', __DIR__ . '/webhook_log.txt');

// Loads the Stripe PHP library managed by Composer.
require_once('../vendor/autoload.php');
// Includes your configuration with API keys and product-specific IDs.
require_once('../config.php');
// Includes the functions to interact with MailerLite (both for groups and automations).
require_once('email-handler.php');

// Authenticates with the Stripe API using your secret key from config.php.
\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// -----------------------------------------------------------------------------
// SECTION 2: WEBHOOK SIGNATURE VERIFICATION
// -----------------------------------------------------------------------------
// This is a critical security step to ensure the request is from Stripe.

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'] ?? null;
$event = null;

try {
    // Verifies the event by checking the signature against your webhook secret.
    // If this fails, it throws an exception, and the script stops.
    $event = \Stripe\Webhook::constructEvent($payload, $sig_header, STRIPE_WEBHOOK_SECRET);
    error_log("Webhook verified successfully. Event type: " . $event->type);
} catch(Exception $e) {
    // If verification fails, log the error and stop the script.
    error_log("Webhook Error: " . $e->getMessage());
    http_response_code(400);
    exit();
}

// -----------------------------------------------------------------------------
// SECTION 3: EVENT HANDLING LOGIC
// -----------------------------------------------------------------------------
// This section determines the event type and then which product it relates to.

// CASE 1: A customer successfully completes the checkout process.
if ($event->type == 'checkout.session.completed') {
    $session = $event->data->object;
    try {
        // Retrieve the list of items purchased in this session.
        $line_items = \Stripe\Checkout\Session::allLineItems($session->id);

        // Loop through each item in the order to identify the product.
        foreach ($line_items->data as $item) {
            
            // CHECK FOR STUDY CLUB: See if the purchased price ID is in our array of valid IDs.
            if (in_array($item->price->id, STRIPE_PRICE_IDS_STUDY_CLUB)) {
                $customer_name = $session->customer_details->name ?? 'Study Club Member';
                $customer_email = $session->customer_details->email ?? null;
                if ($customer_email) {
                    error_log("Study Club purchase confirmed. Adding to welcome group for: " . $customer_email);
                    // For success, we add the subscriber to a MailerLite group.
                    addSubscriberToMailerLiteGroup($customer_name, $customer_email, MAILERLITE_GROUP_ID_STUDY_CLUB);
                }
                break; // Product handled, exit the loop.
            }
        }
    } catch(Exception $e) {
        error_log("Error processing checkout.session.completed: " . $e->getMessage());
    }

// CASE 2: A recurring subscription payment fails.
} else if ($event->type == 'invoice.payment_failed') {
    $invoice = $event->data->object;
    
    // Loop through each line item on the invoice to identify the product.
    foreach ($invoice->lines->data as $line) {
        if (isset($line->price)) {

            // CHECK FOR STUDY CLUB: See if the invoice's price ID is in our array of valid IDs.
            if (in_array($line->price->id, STRIPE_PRICE_IDS_STUDY_CLUB)) {
                try {
                    $customer = \Stripe\Customer::retrieve($invoice->customer);
                    error_log("Study Club payment failed for {$customer->email}.");
                    // For failure, we trigger a MailerLite automation to notify the admin.
                    triggerMailerLiteAutomation($customer->name, $customer->email, MAILERLITE_AUTOMATION_ID_PAYMENT_FAILED_STUDY_CLUB);
                } catch (Exception $e) {
                    error_log("Could not retrieve customer {$invoice->customer}. Error: " . $e->getMessage());
                }
                break; // Product handled, exit the loop.
            }
        }
    }

// CASE 3: A subscription is cancelled (e.g., after all payment retries fail).
} else if ($event->type == 'customer.subscription.deleted') {
    $subscription = $event->data->object;

    // Loop through the items in the subscription to identify the product.
    foreach ($subscription->items->data as $item) {

        // CHECK FOR STUDY CLUB: See if the subscription's price ID is in our array of valid IDs.
        if (in_array($item->price->id, STRIPE_PRICE_IDS_STUDY_CLUB)) {
            try {
                $customer = \Stripe\Customer::retrieve($subscription->customer);
                error_log("Study Club subscription cancelled for {$customer->email}.");
                // For cancellation, we trigger an automation for off-boarding/admin notification.
                triggerMailerLiteAutomation($customer->name, $customer->email, MAILERLITE_AUTOMATION_ID_SUBSCRIPTION_CANCELLED_STUDY_CLUB);
            } catch (Exception $e) {
                error_log("Could not retrieve customer {$subscription->customer}. Error: " . $e->getMessage());
            }
            break; // Product handled, exit the loop.
        }
    }
} else {
    // If the event is not one we're handling, we log it for monitoring purposes.
    error_log("Received unhandled event type: " . $event->type);
}

// -----------------------------------------------------------------------------
// SECTION 4: FINAL RESPONSE TO STRIPE
// -----------------------------------------------------------------------------
// It is crucial to send a 200 OK response to Stripe to acknowledge receipt.
// If Stripe doesn't get this, it will assume the delivery failed and will
// keep re-sending the same event, which could cause duplicate actions.
http_response_code(200);
error_log("Webhook processing completed successfully.");
?>