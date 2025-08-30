<?php
/**
 * email-handler.php
 *
 * This file contains helper functions for interacting with the MailerLite API.
 * The webhook.php script calls these functions to perform specific actions
 * based on the Stripe event that was received.
 */

// Includes your site's configuration file with API keys and IDs.
require_once '../config.php';

/**
 * Adds a subscriber to a specified MailerLite group.
 *
 * This function is typically used for successful purchases to add a customer
 * to the main product group (e.g., "Study Club Members").
 *
 * @param string $customer_name The name of the customer.
 * @param string $customer_email The email of the customer.
 * @param string $group_id The unique ID of the MailerLite group.
 * @return bool Returns true on success, false on failure.
 */
function addSubscriberToMailerLiteGroup($customer_name, $customer_email, $group_id) {
    // Defines the MailerLite API endpoint for adding or updating subscribers.
    $url = 'https://connect.mailerlite.com/api/subscribers';

    // Prepares the data payload in JSON format. It includes the email, name,
    // and the specific group ID the subscriber should be added to.
    $data = json_encode([
        'email' => $customer_email,
        'fields' => ['name' => $customer_name],
        'groups' => [$group_id]
    ]);

    // Initializes a cURL session to make the API request.
    $ch = curl_init($url);
    // Sets cURL options: expecting a response, setting headers for JSON,
    // authorizing with your API key, and specifying a POST request with your data.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer ' . MAILERLITE_API_KEY
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Executes the API request and gets the HTTP status code.
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // MailerLite returns 200 (OK) or 201 (Created) on success.
    if ($httpCode == 200 || $httpCode == 201) {
        error_log("SUCCESS: Added {$customer_email} to MailerLite group {$group_id}.");
        return true;
    } else {
        error_log("FAILED: Could not add {$customer_email} to group {$group_id}. Response Code: {$httpCode}.");
        return false;
    }
}

/**
 * Enrolls a subscriber directly into a specified MailerLite automation.
 *
 * This function is used for transactional events like payment failures or
 * subscription cancellations to trigger specific workflows.
 *
 * @param string $customer_name The name of the customer.
 * @param string $customer_email The email of the customer.
 * @param string $automation_id The unique ID of the MailerLite automation.
 * @return bool Returns true on success, false on failure.
 */
function triggerMailerLiteAutomation($customer_name, $customer_email, $automation_id) {
    // Defines the API endpoint to trigger a specific automation, using the automation ID in the URL.
    $url = "https://connect.mailerlite.com/api/automations/{$automation_id}/subscribers";

    // Prepares the data payload. It's simpler as it doesn't need a group ID.
    $data = json_encode([
        'email' => $customer_email,
        'fields' => ['name' => $customer_name]
    ]);

    // The cURL request is set up similarly to the function above.
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer ' . MAILERLITE_API_KEY
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // For this endpoint, MailerLite returns 204 (No Content) on success.
    if ($httpCode == 204) {
        error_log("SUCCESS: Triggered automation {$automation_id} for {$customer_email}.");
        return true;
    } else {
        error_log("FAILED: Could not trigger automation {$automation_id} for {$customer_email}. Response Code: {$httpCode}.");
        return false;
    }
}
?>