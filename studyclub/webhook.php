<?php
// --- SETUP AND CONFIGURATION ---

// Set up a log file for debugging webhook events.
ini_set('error_log', __DIR__ . '/webhook_log.txt');

// Include necessary files for Stripe, your config, and email functions.
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/email-handler.php');

// Authenticate with the Stripe API using your secret key.
\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// --- WEBHOOK SIGNATURE VERIFICATION ---

// Retrieve the raw POST data and the Stripe signature from the request headers.
$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'] ?? null;
$event = null;

// Use a try-catch block to verify the webhook signature. This is a critical security step.
try {
    // Stripe's library constructs the event and verifies that it came from Stripe,
    // not a malicious third party, using your webhook secret.
    $event = \Stripe\Webhook::constructEvent($payload, $sig_header, STRIPE_WEBHOOK_SECRET);
    error_log("Webhook verified. Event type: " . $event->type);
} catch(Exception $e) {
    // If verification fails, log the error and stop the script.
    error_log("Webhook signature verification failed: " . $e->getMessage());
    http_response_code(400);
    exit();
}

// --- EVENT HANDLING LOGIC ---

// CASE 1: A customer successfully completes the checkout process.
if ($event->type == 'checkout.session.completed') {
    // Get the session object from the event data.
    $session = $event->data->object;
    
    // Retrieve the newly created subscription ID from the session object.
    $subscription_id = $session->subscription;

    // Proceed only if a subscription ID exists.
    if ($subscription_id) {
        try {
            // --- NEW: SCHEDULE THE SUBSCRIPTION CANCELLATION ---
            
            // Define the final cancellation date for the service.
            $cancellation_date = new DateTime('2026-06-23');
            // Convert the date to a Unix timestamp for Stripe.
            $cancellation_timestamp = $cancellation_date->getTimestamp();
            
            // Make an API call to Stripe to UPDATE the subscription that was just created.
            \Stripe\Subscription::update($subscription_id, [
                // Set the 'cancel_at' parameter. Stripe will automatically cancel this
                // subscription on the specified future date.
                'cancel_at' => $cancellation_timestamp,
            ]);
            
            // Log the successful update for your records.
            error_log("Successfully scheduled cancellation for subscription: " . $subscription_id . " on " . $cancellation_date->format('Y-m-d'));

            // --- YOUR EXISTING MAILERLITE LOGIC ---
            
            // Retrieve customer details from the session for your email marketing list.
            $customer_name = $session->customer_details->name ?? 'Study Club Member';
            $customer_email = $session->customer_details->email ?? null;
            
            if ($customer_email) {
                error_log("Adding to welcome group: " . $customer_email);
                // This function (from email-handler.php) adds the new customer to your MailerLite group.
                addSubscriberToMailerLiteGroup($customer_name, $customer_email, MAILERLITE_GROUP_ID_STUDY_CLUB);
            }

        } catch(Exception $e) {
            // Log any errors that occur during the subscription update or email handling.
            error_log("Error processing checkout.session.completed for subscription " . $subscription_id . ": " . $e->getMessage());
        }
    }
// CASE 2: A recurring subscription payment fails. (RESTORED LOGIC)
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
                    // For failure, we trigger a MailerLite automation.
                    triggerMailerLiteAutomation($customer->name, $customer->email, MAILERLITE_AUTOMATION_ID_PAYMENT_FAILED_STUDY_CLUB);
                } catch (Exception $e) {
                    error_log("Could not retrieve customer {$invoice->customer}. Error: " . $e->getMessage());
                }
                break; // Product handled, exit the loop.
            }
        }
    }

// CASE 3: A subscription is cancelled. (RESTORED LOGIC)
} else if ($event->type == 'customer.subscription.deleted') {
    $subscription = $event->data->object;

    // Loop through the items in the subscription to identify the product.
    foreach ($subscription->items->data as $item) {
        // CHECK FOR STUDY CLUB: See if the subscription's price ID is in our array of valid IDs.
        if (in_array($item->price->id, STRIPE_PRICE_IDS_STUDY_CLUB)) {
            try {
                $customer = \Stripe\Customer::retrieve($subscription->customer);
                error_log("Study Club subscription cancelled for {$customer->email}.");
                // For cancellation, we trigger an off-boarding automation.
                triggerMailerLiteAutomation($customer->name, $customer->email, MAILERLITE_AUTOMATION_ID_SUBSCRIPTION_CANCELLED_STUDY_CLUB);
            } catch (Exception $e) {
                error_log("Could not retrieve customer {$subscription->customer}. Error: " . $e->getMessage());
            }
            break; // Product handled, exit the loop.
        }
    }
} else {
    // Log any other webhook events you receive that you aren't explicitly handling.
    error_log("Received unhandled event type: " . $event->type);
}

// --- FINAL RESPONSE TO STRIPE ---

// Send a 200 OK response back to Stripe to acknowledge that you've received the event.
// If Stripe doesn't receive this, it will keep resending the webhook.
http_response_code(200);
error_log("Webhook processing finished.");
?>

