<?php
session_start();

// Validate the required fields from the form
$required_fields = ['student_first_name', 'student_last_name', 'student_email'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        // If a required field is missing, redirect back with an error
        header("Location: ../study-club.php?error=missing_fields#signup");
        exit();
    }
}

// Combine the first and last names into a single full name
$full_name = trim($_POST['student_first_name']) . ' ' . trim($_POST['student_last_name']);

// Store the necessary data in the session for the next step
$_SESSION['customer_name'] = $full_name;
$_SESSION['customer_email'] = trim($_POST['student_email']);
$_SESSION['parent_email'] = trim($_POST['parent_email'] ?? ''); // Keep parent email as it's still in the form

// Redirect to the checkout creation script
header("Location: create-checkout.php");
exit();
?>