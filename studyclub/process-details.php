<?php
<?php
var_dump($_POST);
die('End of debug');



session_start();

// Validate required fields (reduced list)
$required_fields = ['student_name', 'student_email'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        header("Location: ../study-club.php?error=missing_fields#signup");
        exit();
    }
}

// Store form data in session (updated field list)
$_SESSION['customer_name'] = trim($_POST['student_name']);
$_SESSION['customer_email'] = trim($_POST['student_email']);
$_SESSION['exam_board'] = 'Edexcel';
$_SESSION['parent_name'] = ''; // No longer collected
$_SESSION['parent_email'] = trim($_POST['parent_email'] ?? '');
$_SESSION['current_grade'] = ''; // No longer collected
$_SESSION['target_grade'] = ''; // No longer collected

header("Location: create-checkout.php");
exit();
?>