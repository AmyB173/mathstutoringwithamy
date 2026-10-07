<?php
/* ============================================================================
   WHY START WITH A ONE-OFF LESSON
   A short, direct page: why I suggest a single lesson before a regular slot or
   a block, what it costs and how to book. Deliberately no hero.

   AMY: the site says "one-off lesson" everywhere now, not "trial lesson" (that
   wording came out on 2 Sep). If you want "trial" back, it changes here, in the
   H1, the About dropdown label in navbar.php and the file name / URL.

   AMY: no price is stated on this page on purpose. The one-off lesson is charged
   at the normal single-lesson rate for the child's level, which lives on
   /tutoring-and-prices and is set in prices.php. One place to change it.
   ========================================================================= */
$waLink = 'https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27d%20like%20to%20book%20a%20one-off%20maths%20lesson%20for%20my%20child';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3F23DT2TY7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-3F23DT2TY7");
    </script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Why I suggest a single one-off lesson before your child takes a regular place: a normal 55-minute lesson, charged at the usual rate." />
    <title>Why Start With a One-Off Lesson | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/one-off-lesson" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/one-off-lesson">
    <meta property="og:title" content="Why Start With a One-Off Lesson | Maths Tutoring With Amy">
    <meta property="og:description" content="A normal 55-minute lesson, so you and your child can see how I teach before committing to anything more.">
    <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-at-desk-wearing-skirt-2026.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the footer icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- ================================================ THE PAGE
         One plain section, no hero: what the lesson is, what happens after,
         what it costs, and how to book. -->
    <section class="section" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="mb-4">Why I start with a one-off lesson</h1>
                    <p>Before your child takes a regular place with me or one of my chosen tutors, I always suggest a single lesson first. Qualifications tell you we can teach. They can't tell you how your child will feel in the lesson.</p>
                    <p class="pull-line">You need to see if your child comes alive in the lesson, feels comfortable and feels like they're learning.</p>
                    <p>It is a real 55-minute lesson, on the same platform we would use going forward, and it gives you a taste of what weekly lessons will feel like. After that lesson, you can then make an informed choice about whether to go forward with weekly lessons.</p>
                    <p class="mb-5">It is charged at the normal single-lesson rate for your child's level. Prices are on the <a href="/tutoring-and-prices">tutoring and prices</a> page.</p>

                    <a href="<?php echo $waLink; ?>" class="btn btn-cta-pro btn-lg" target="_blank" rel="noopener">Book a one-off lesson</a>
                    <p class="mt-4 mb-0" style="color: var(--ink-soft); font-size: 0.95rem;">Message me with your child's year group and exam board. Prefer email? <a href="/contact">Send an enquiry</a> through the contact page.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ ONE PARENT'S WORDS
         Same strip as Nancy's on the homepage, tinted here so it separates
         from the white section above. -->
    <section class="section section-alt">
        <div class="container">
            <figure class="quote-band">
                <blockquote>"My son was not happy about having a tutor at first, but he now looks forward to his lessons. He always comes away from the lesson on a high."</blockquote>
                <figcaption class="testimonial-attribution">Emma, Year 8 Parent</figcaption>
            </figure>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
