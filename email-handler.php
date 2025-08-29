<?php
// email-handler.php

require_once 'config.php';

function sendWelcomeEmail($customer_name, $customer_email) {
    
    $url = 'https://connect.mailerlite.com/api/subscribers';
    
    $data = json_encode([
        'email' => $customer_email,
        'fields' => [
            'name' => $customer_name
        ],
        'groups' => [MAILERLITE_GROUP_ID]
    ]);
    
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
    
    if ($httpCode == 200 || $httpCode == 201) {
        error_log("SUCCESS: Added {$customer_email} to Study Club");
        return true;
    } else {
        error_log("FAILED: Could not add {$customer_email}. Code: {$httpCode}");
        return false;
    }
}
?>