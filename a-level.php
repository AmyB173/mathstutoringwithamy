<?php
require_once 'prices.php';

/* ============================================================================
   FAQ
   One list, used twice: the visible questions further down and the FAQPage
   structured data in the head. Edit an answer here and both stay in step.
   Answers may contain links; the structured data gets them with the tags
   stripped.
   ========================================================================= */
$faqs = [
    [
        'q' => 'When should my child start A Level maths tutoring?',
        'a' => 'Earlier than most parents expect. Year 12 feels manageable in September, and that is exactly why the gaps go unnoticed until the mocks. If your child is in Year 12 and working towards an A or a B, the <a href="/year-12-a-level-group">Year 12 Mastery Group</a> is built for that moment. If they are already struggling, one to one lessons or the <a href="/recovery">12-Week Recovery Course</a> will do more for them.',
    ],
    [
        'q' => 'Which A Level maths exam boards do you cover?',
        'a' => 'Edexcel is my specialism, and the Year 12 Mastery Group is Edexcel only. One to one lessons also cover AQA, OCR and MEI.',
    ],
    [
        'q' => 'How much does A Level maths tutoring cost?',
        'a' => 'One to one lessons are &pound;' . $prices['alevel_solo'] . ' per 55-minute session, and small group lessons are &pound;' . $prices['alevel_group'] . ' per session. The Year 12 Mastery Group is billed per half term, at &pound;' . ($prices['alevel_group'] * $blockMin) . ' to &pound;' . ($prices['alevel_group'] * $blockMax) . ' depending on how many sessions fall in it, and the Recovery Course is &pound;' . $prices['recovery'] . ' for the full 12 weeks. Every price is on the <a href="/tutoring-and-prices">tutoring and prices</a> page.',
    ],
    [
        'q' => 'Should my child have group lessons or one to one?',
        'a' => 'It depends on where they are. A Year 12 student who got a 7 or an 8 at GCSE and wants the foundation built properly will usually do very well in the group, with harder questions and proper marking. A student with real gaps to close, or anyone in Year 13, is usually better with one to one lessons. If you are not sure, message me with the GCSE grade and what is going wrong, and I will tell you honestly which I would pick.',
    ],
    [
        'q' => 'How do the online lessons work?',
        'a' => 'Lessons run on Pencil Spaces, a shared digital classroom, so your child writes on the same whiteboard as the teacher rather than just watching a screen. They need a laptop or tablet with a microphone and a quiet spot. A cheap graphics tablet or an iPad makes a real difference for writing maths.',
    ],
];
?>
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
  <meta name="description" content="Online A Level Maths tutoring for Year 12 and Year 13: one to one lessons, a small weekly Edexcel group for Year 12, and a 12-week recovery course. Taught by a qualified teacher." />
  <title>Online A Level Maths Tutor | Year 12 &amp; 13 | Maths Tutoring with Amy</title>
  <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/a-level" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/a-level">
  <meta property="og:title" content="Online A Level Maths Tutor | Year 12 &amp; 13 | Maths Tutoring with Amy">
  <meta property="og:description" content="Online A Level Maths tutoring for Year 12 and Year 13: one to one lessons, a small weekly Edexcel group for Year 12, and a 12-week recovery course.">
  <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-green-top.jpg">

  <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Online A Level Maths tutoring",
    "serviceType": "A Level Maths tutoring",
    "description": "Online A Level Maths tutoring for Year 12 and Year 13: one to one lessons, a weekly Year 12 group and the 12-Week Recovery Course. Edexcel is my specialism.",
    "url": "https://www.mathstutoringwithamy.co.uk/a-level",
    "image": "https://www.mathstutoringwithamy.co.uk/assets/images/amy-green-top.jpg",
    "areaServed": "GB",
    "audience": {
      "@type": "EducationalAudience",
      "educationalRole": "student"
    },
    "provider": {
      "@type": "EducationalOrganization",
      "name": "Maths Tutoring with Amy",
      "url": "https://www.mathstutoringwithamy.co.uk"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "A Level Maths tutoring",
      "itemListElement": [
        {
          "@type": "Offer",
          "name": "A Level Maths Mastery Group: Year 12, 55-minute lesson",
          "price": "<?php echo $prices['alevel_group']; ?>",
          "priceCurrency": "GBP",
          "url": "https://www.mathstutoringwithamy.co.uk/year-12-a-level-group"
        },
        {
          "@type": "Offer",
          "name": "A Level one to one maths tutoring, 55-minute lesson",
          "price": "<?php echo $prices['alevel_solo']; ?>",
          "priceCurrency": "GBP",
          "url": "https://www.mathstutoringwithamy.co.uk/a-level"
        },
        {
          "@type": "Offer",
          "name": "A Level Maths Recovery Course, 12 weeks",
          "price": "<?php echo $prices['recovery']; ?>",
          "priceCurrency": "GBP",
          "url": "https://www.mathstutoringwithamy.co.uk/recovery"
        }
      ]
    }
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
<?php foreach ($faqs as $i => $faq): ?>
      {
        "@type": "Question",
        "name": <?php echo json_encode($faq['q'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>,
        "acceptedAnswer": {
          "@type": "Answer",
          "text": <?php echo json_encode(html_entity_decode(strip_tags($faq['a']), ENT_QUOTES, 'UTF-8'), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
        }
      }<?php echo $i < count($faqs) - 1 ? ',' : ''; ?>

<?php endforeach; ?>
    ]
  }
  </script>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <!-- ================================================ 1. HERO -->
  <section class="hero-section" style="padding: 8rem 0 5rem;">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h1 class="mb-4">A Level Maths Tutoring for Year 12 &amp; Year 13</h1>
          <p>The jump from GCSE to A Level is bigger than most students expect. The pace is faster, the questions are harder, and memorising steps stops working. I've spent 12 years teaching secondary maths, and the pattern I see most is a student who found September easy and only discovers the gaps at the mocks, by which point there is a lot to catch up.</p>
          <p class="exam-boards-line mb-4">A Level, all exam boards: Edexcel &middot; AQA &middot; OCR &middot; MEI</p>
          <p class="mb-4">Everything is online, on a shared interactive whiteboard. Edexcel is my specialism, and the place I would start is the <a href="/year-12-a-level-group">Year 12 Mastery Group</a>.</p>
          <a href="/contact" class="btn-cta-pro">Enquire now</a>
        </div>

        <div class="col-lg-6">
          <img src="./assets/images/amy-green-top.jpg" class="img-fluid photo-frame"
               alt="Amy, A Level Maths tutor with 12 years of teaching experience" width="1400" height="1282">
          <p class="photo-caption">Amy, qualified maths teacher, 12 years of experience, Edexcel specialist.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 2. YEAR 12 MASTERY GROUP -->
  <section id="year-12-group" class="section" style="background: white;">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h2 class="mb-4">A Level Maths Mastery Group: Year 12</h2>
          <p>A weekly Edexcel group for Year 12 (Lower Sixth), capped at five students, running from September through to the summer. It exists because the students who come unstuck in Year 12 are very often the ones who found September easy, and by the time that shows up in the mocks there is a year of catching up to do.</p>
          <p>Every week there is a live 55-minute lesson on the shared whiteboard, an independent task your child marks themselves, and two to three exam questions I mark personally with video, audio or written feedback. It is the one to choose if you want the foundation built properly now rather than rescued in the spring.</p>

          <p class="price-line">&pound;<?php echo $prices['alevel_group'] * $blockMin; ?> to &pound;<?php echo $prices['alevel_group'] * $blockMax; ?> <span>per half term</span></p>
          <p class="price-line-note">&pound;<?php echo $prices['alevel_group']; ?> per session. A half term is <?php echo $blockMin; ?> to <?php echo $blockMax; ?> sessions, which is where the range comes from.</p>

          <ul class="plain-list mt-4">
            <li>Edexcel A Level Maths, Year 12 (Lower Sixth) only</li>
            <li>Tuesdays 6pm, maximum 5 students</li>
            <li>Marked exam questions every week, included in the fee</li>
            <li>For students who got a 7 or an 8 at GCSE and are aiming for an A or a B</li>
          </ul>

          <a href="/year-12-a-level-group" class="btn-cta-pro">Find out more about the Year 12 group</a>
        </div>

        <div class="col-lg-6">
          <img src="./assets/images/amy-at-desk-wearing-skirt-2026.jpg" class="img-fluid photo-frame"
               alt="Amy at her desk with a laptop and graphics tablet, ready to teach the Year 12 group online"
               width="1400" height="1579" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 3. ONE PARENT'S WORDS -->
  <section class="section section-alt">
    <div class="container">
      <figure class="quote-band">
        <blockquote>"He's grown in confidence as Amy guided him through the content and showed what to do when he got stuck."</blockquote>
        <figcaption class="testimonial-attribution">Katy, Parent of an A Level Student</figcaption>
      </figure>
    </div>
  </section>

  <!-- ================================================ 4. 1:1 TUTORING -->
  <section id="one-to-one" class="section" style="background: white;">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2">
          <img src="./assets/images/alevel-pencil-spaces-homework.png" class="img-fluid photo-frame"
               alt="Video homework feedback on a student's A Level maths working, recorded on Pencil Spaces"
               loading="lazy">
          <p class="photo-caption">Homework feedback can be video, audio or written, whichever suits the work.</p>
        </div>

        <div class="col-lg-6 order-lg-1">
          <h2 class="mb-4">One to one A Level tutoring</h2>
          <p>One to one lessons are the most focused option. Every lesson is built around your child: their gaps, their pace and their exam board. We go where they need to go without moving on before they are ready, which matters on a course where every topic leans on the last.</p>
          <p>It is the right choice for Year 13, for any student with real gaps to close, and for a Year 12 who needs something the group cannot give them. Lessons cover Edexcel, AQA, OCR and MEI, and every student gets weekly homework with personalised feedback so the learning carries on between lessons.</p>

          <p class="price-line">&pound;<?php echo $prices['alevel_solo']; ?> <span>per 55-minute session</span></p>

          <ul class="plain-list mt-4 mb-0">
            <li>Tailored to your child's gaps and exam board</li>
            <li>Year 12 and Year 13</li>
            <li>Weekly homework with personalised feedback</li>
            <li>Ongoing support between sessions</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 5. SMALL GROUP TUTORING -->
  <section id="small-group" class="section section-alt">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <img src="./assets/images/pencil-workings.png" class="img-fluid photo-frame"
               alt="A Level Maths session on the shared interactive whiteboard"
               loading="lazy">
        </div>

        <div class="col-lg-6">
          <h2 class="mb-4">Small group A Level tutoring</h2>
          <p>Small group sessions run with a maximum of five students, so there is still plenty of time for questions and individual attention. The groups are small on purpose: small enough that nobody gets left behind, and focused enough that the pace stays purposeful.</p>
          <p>Many students find that hearing how someone else approaches the same problem is genuinely useful, and it is reassuring to learn alongside people working through the same material. Students get weekly homework with personalised feedback (video, audio or written).</p>

          <p class="price-line">&pound;<?php echo $prices['alevel_group']; ?> <span>per 55-minute session</span></p>

          <ul class="plain-list mt-4 mb-0">
            <li>Maximum 5 students per group</li>
            <li>Year 12 and Year 13</li>
            <li>More affordable than one to one, without losing quality</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 6. RECOVERY COURSE -->
  <section id="recovery" class="section" style="background: white;">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2">
          <img src="./assets/images/alevel-pencil-spaces.png" class="img-fluid photo-frame"
               alt="A Level Maths Recovery Course session on the interactive whiteboard"
               loading="lazy">
          <p class="photo-caption">Sessions take place on Pencil Spaces, an interactive shared digital classroom.</p>
        </div>

        <div class="col-lg-6 order-lg-1">
          <h2 class="mb-4">12-Week A Level Maths Recovery Course</h2>
          <p>If your child is in Year 12 and their grades are slipping, the Recovery Course is a structured 12-week programme to put things right before Year 13 begins. It is not about keeping up with current school lessons. It goes back to Year 1 content, rebuilds it properly, and gives your child the understanding they need to take on the harder material with confidence.</p>
          <p>The programme includes weekly live sessions, custom videos to watch between lessons, homework with personalised feedback, and bi-weekly check-ins from me throughout the week. Starting dates run from March to June, and places are limited to a very small group.</p>

          <p class="price-line">&pound;<?php echo $prices['recovery']; ?> <span>for the complete 12 weeks</span></p>

          <ul class="plain-list mt-4 mb-4">
            <li>For Year 12 students with a Grade 6 or above at GCSE</li>
            <li>Weekly live sessions rebuilding Year 1 foundations</li>
            <li>Custom videos, homework feedback and bi-weekly check-ins</li>
            <li>Places strictly limited, with starting dates from March to June</li>
          </ul>

          <a href="/recovery" class="btn-cta-pro">Find out more about the Recovery Course</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 7. WATCH ME TEACH -->
  <section class="section section-alt">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5">
          <h2 class="mb-4">Watch me teach</h2>
          <p class="mb-0">Here I work through an integration question from a past A Level paper. It is the style of teaching I stand by: step by step, and focused on understanding rather than just reaching the answer.</p>
        </div>
        <div class="col-lg-7">
          <div class="ratio ratio-16x9 photo-frame" style="overflow: hidden;">
            <iframe loading="lazy"
              src="https://www.youtube.com/embed/gtn63f-P61U?start=17"
              title="Watch Amy teach A Level Maths"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 8. REVIEWS -->
  <section class="section" style="background: white;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mb-5">What A Level families say</h2>
          <img src="./assets/images/testimonials/google-review-ha.png" alt="5-star Google review from Helen Arb praising Amy's patient, well-structured A Level lessons and her son's growing belief in himself" class="img-fluid photo-frame mb-4" width="811" height="316" loading="lazy" />
          <img src="./assets/images/testimonials/google-review-kr.png" alt="5-star Google review from Katy Reeve praising Amy's clear, structured resources" class="img-fluid photo-frame mb-4" width="815" height="193" loading="lazy" />
          <img src="./assets/images/testimonials/google-review-ej.png" alt="5-star Google review from Ethan Jefferies, who achieved an A* in A Level Maths and went on to study a maths degree" class="img-fluid photo-frame mb-3" width="830" height="410" loading="lazy" />
          <p class="google-reviews-line"><a href="https://share.google/PiqQQ8HetL8ChASgP" target="_blank" rel="noopener">More five-star reviews on Google</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 9. FAQ -->
  <section id="faq" class="section section-alt">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 class="mb-5">Questions parents ask about A Level maths tutoring</h2>
<?php foreach ($faqs as $i => $faq): ?>
          <h3 class="column-heading"><?php echo $faq['q']; ?></h3>
          <p<?php echo $i < count($faqs) - 1 ? ' class="mb-5"' : ' class="mb-0"'; ?>><?php echo $faq['a']; ?></p>
<?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ 10. CONTACT -->
  <section id="contact-alevel" class="section" style="background: white;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <h2 class="mb-3">Not sure which option is right?</h2>
          <p class="mb-4">Message me and tell me a bit about your child's situation, including their GCSE grade and what is feeling hard. I'll give you an honest answer about which option makes the most sense, or whether any of them is the right fit at all.</p>
          <a href="/contact" class="btn-cta-pro">Get in touch</a>
          <p class="mt-4 mb-1">
            <a href="https://wa.me/447470932888?text=Hi%20Amy%2C%20I'm%20interested%20in%20A%20Level%20Maths%20tutoring%20for%20my%20child" class="quiet-link" target="_blank" rel="noopener">Or send me a WhatsApp message</a>
          </p>
          <p class="mb-0"><a href="mailto:contact@mathstutoringwithamy.co.uk" class="quiet-link">Or email contact@mathstutoringwithamy.co.uk</a></p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
