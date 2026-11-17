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
  <meta name="description" content="Meet Amy, lead tutor, and the team of experienced, DBS-checked maths teachers at Maths Tutoring with Amy." />
  <title>About Us | Online Maths Tutors | Maths Tutoring with Amy</title>

  <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
  <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/meet-amy" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/meet-amy">
  <meta property="og:title" content="About Us | Online Maths Tutors | Maths Tutoring with Amy">
  <meta property="og:description" content="Meet Amy, lead tutor, and the team of experienced, DBS-checked maths teachers at Maths Tutoring with Amy.">
  <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-white-shirt-at-desk.webp">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

  <?php require_once __DIR__ . '/site-schema.php'; ?>
  <script type="application/ld+json">
  <?php echo schema_json($schemaAmy, true); ?>

  </script>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <!-- ================================================ INTRO -->
  <section class="section" style="background: var(--surface-alt);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="mb-4">About us</h1>
          <p class="text-dark mb-0">We offer high quality, friendly and welcoming tutoring from a small team of highly experienced maths teachers. Every tutor is vetted rigorously by me and holds a DBS check, and I match each student to the tutor I think will suit them best. You can read more about what guides us in <a href="/framework-values">our values</a>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ THE TEAM -->
  <section class="section" style="background: white;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">

          <div class="row align-items-start pb-5 mb-5" style="border-bottom: 1px solid #d1d5db;">
            <div class="col-md-3 mb-4 mb-md-0">
              <div class="photo-frame" style="width: 100%; max-width: 220px; aspect-ratio: 4 / 5; overflow: hidden;">
                <img src="./assets/images/amy-white-shirt-at-desk.webp" alt="Amy, qualified maths teacher and lead tutor"
                     style="width: 100%; height: 100%; object-fit: cover; object-position: 58% 38%; transform: scale(1.6); transform-origin: 58% 40%; display: block;">
              </div>
            </div>
            <div class="col-md-9">
              <h2 class="mb-1" style="font-size: 1.75rem;">Amy</h2>
              <p class="mb-3" style="color: var(--ink-soft);">Lead Tutor</p>
              <p class="text-dark">I'm a qualified maths teacher with twelve years in the classroom, and I lead the team. I set the business up for the freedom to teach properly: no rushing a topic because the scheme of work says so, and no moving on before a student is ready. I assess continuously during the lesson, so I know exactly when to move on, and each student gets homework chosen for them, with feedback on it. Every tutor on the team works the same way.</p>
              <p class="text-dark"><strong>I believe if we can help a child feel capable and curious, they will learn more than a child who is being pushed, and that the grades follow from that.</strong></p>
              <p class="mb-0" style="color: var(--ink-soft); font-size: 0.95rem;">A*A*AA at A Level · 2:1 from the University of Bristol · PGCE with Distinction</p>
            </div>
          </div>

          <div class="row align-items-start pb-5 mb-5" style="border-bottom: 1px solid #d1d5db;">
            <div class="col-md-3 mb-4 mb-md-0">
              <img src="./assets/images/alexandra-tutor-660.jpg" alt="Alexandra, maths tutor" width="660" height="827" loading="lazy"
                   class="img-fluid photo-frame" style="width: 100%; max-width: 220px; aspect-ratio: 4 / 5; object-fit: cover;">
            </div>
            <div class="col-md-9">
              <h2 class="mb-3" style="font-size: 1.75rem;">Alexandra</h2>
              <p class="text-dark mb-0">Alexandra was a Head of Mathematics for ten years and teaches A Level, GCSE, KS3 and Year 6. She takes the time to understand how each student learns, and creates a warm and welcoming atmosphere in tutoring. She also loves mixing maths with the arts and has a history of running maths and music projects at a specialist music school.</p>
            </div>
          </div>

          <div class="row align-items-start">
            <div class="col-md-3 mb-4 mb-md-0">
              <img src="./assets/images/parmjit-tutor-660.jpg" alt="Parmjit, maths tutor" width="660" height="990" loading="lazy"
                   class="img-fluid photo-frame" style="width: 100%; max-width: 220px; aspect-ratio: 4 / 5; object-fit: cover;">
            </div>
            <div class="col-md-9">
              <h2 class="mb-3" style="font-size: 1.75rem;">Parmjit</h2>
              <p class="text-dark mb-0">Parmjit is an excellent, experienced, qualified teacher who teaches A Level and GCSE, including Further Maths. He puts students at ease so they feel comfortable asking questions and get in the right mindset to learn. He loves making statistics real, including experiments like a hypothesis test on whether anyone can tell branded crisps from supermarket ones.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ A PARENT ON THE TUTORS -->
  <section class="section" style="background: var(--surface-alt);">
    <div class="container">
      <figure class="quote-band">
        <blockquote>"Maths Tutoring with Amy is professional, efficient, friendly, fantastic quality, and the tutors are passionate about Maths and helping children succeed!! Amazing!"</blockquote>
        <figcaption class="testimonial-attribution">Holly, A Level Parent, B to A*</figcaption>
      </figure>
    </div>
  </section>

  <!-- ================================================ CTA -->
  <section class="section" style="background: var(--ink); padding: 60px 0;">
    <div class="container text-center">
      <h2 style="color: white;" class="mb-3">Get in touch</h2>
      <p style="color: rgba(255,255,255,0.8); font-size: 1.125rem;" class="mb-4">Have questions, or want to find out if we're the right fit? I'm happy to chat.</p>
      <a href="/contact" class="btn-cta-pro">Enquire now</a>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
