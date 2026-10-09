<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-3F23DT2TY7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag("js", new Date());
    gtag("config", "G-3F23DT2TY7");
  </script>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Contact Maths Tutoring with Amy | Enquire about online maths tutoring for KS3, GCSE and A Level. Build confidence and improve grades with 12 years' teaching experience." />
  <title>Contact | Maths Tutoring With Amy</title>

  <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
  <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/contact" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/contact">
  <meta property="og:title" content="Contact | Maths Tutoring With Amy">
  <meta property="og:description" content="Enquire about online maths tutoring for KS3, GCSE and A Level. Build confidence and improve grades with 12 years' teaching experience.">
  <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-green-top.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <!-- ================================================ 1. HERO: the two ways to get in touch -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 hero-content">
          <h1 class="hero-title mb-4">Let's talk</h1>
          <p class="hero-subtitle mb-5">There are two ways to get in touch. Choose whichever suits you.</p>

          <h2 class="h5 mb-2">Send me a message</h2>
          <p class="text-dark mb-3">Tell me a little about your child and what they're finding hard. I'll reply within 24 hours, usually sooner.</p>
          <a href="https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27d%20like%20to%20enquire%20about%20tutoring%20for%20my%20child"
             class="btn-whatsapp-cta mb-5">
            <i class="fab fa-whatsapp fs-5"></i> Message me on WhatsApp
          </a>

          <h2 class="h5 mb-2">Book a video call</h2>
          <p class="text-dark mb-3">Pick a time for a relaxed 15 minute video call about your child, with no obligation.</p>
          <a href="https://calendly.com/mathstutoringwithamy/maths-call" target="_blank" rel="noopener" class="quiet-link">Choose a time for a video call</a>
        </div>

        <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
          <img src="./assets/images/amy-white-shirt-at-desk.webp" class="img-fluid photo-frame" alt="Amy at her desk in a white shirt, working through a maths problem" width="3072" height="4080" />
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Record WhatsApp and call-booking clicks in GA4
    document.querySelectorAll('a[href*="wa.me"], a[href*="calendly.com"]').forEach(function (link) {
      link.addEventListener('click', function () {
        if (typeof gtag === 'function') {
          gtag('event', link.href.indexOf('wa.me') !== -1 ? 'whatsapp_click' : 'call_booking_click', {
            link_location: link.closest('section') ? link.closest('section').className : 'unknown'
          });
        }
      });
    });
  </script>
</body>

</html>
