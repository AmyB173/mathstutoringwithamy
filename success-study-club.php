<?php
require_once('vendor/autoload.php');
require_once('config.php');

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

$session_id = $_GET['session_id'] ?? null;
$customer_name = 'Member';

if ($session_id) {
    try {
        $session = \Stripe\Checkout\Session::retrieve($session_id);
        $customer_name = $session->customer_details->name ?? 'Member';
        // You could also retrieve the customer email here if needed:
        // $customer_email = $session->customer_details->email;

    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Handle error, e.g., session not found
        // For simplicity, we'll just log it and proceed with a generic message
        error_log($e->getMessage());
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to the Club! | Maths Tutoring With Amy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center hero-content">
                    <div class="warm-card">
                        <span style="font-size: 4rem;">🎉</span>
                        <h1 class="hero-title mt-3">You're In! Welcome, <?php echo htmlspecialchars($customer_name); ?>!</h1>
                        <p class="hero-subtitle">
                            Thank you for joining the A Level Maths Study Club. Your spot is secured and we are so excited to have you.
                        </p>
                        <hr class="my-4">
                        <h3 class="fw-bold">What Happens Next?</h3>
                        <div class="text-start mx-auto" style="max-width: 500px;">
                            <p class="mb-3"><strong style="color: var(--warm-blue);">Step 1: Check Your Email</strong><br>In the next 5-10 minutes, you'll receive a welcome email with everything you need to get started. Please check your spam/promotions folder just in case!</p>
                            <p class="mb-3"><strong style="color: var(--warm-blue);">Step 2: Join The Community</strong><br>Your welcome email contains the exclusive link to our private student community. This is where you can ask questions and connect with other students.</p>
                            <p class="mb-0"><strong style="color: var(--warm-blue);">Step 3: See The Schedule</strong><br>The email also includes the full schedule for our live masterclasses and Q&A sessions. Add them to your calendar so you don't miss a thing!</p>
                        </div>
                        <hr class="my-4">
                        <p class="text-muted">If you don't receive your email or have any questions, please contact me at <a href="mailto:contact@mathstutoringwithamy.co.uk">contact@mathstutoringwithamy.co.uk</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
