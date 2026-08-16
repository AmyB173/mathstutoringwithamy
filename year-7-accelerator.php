<?php
/* ============================================================================
   YEAR 7 ACCELERATOR: built to the same structure as study-club.php.
   Branded header, ink hero, "is it right for you" row, benefit grid, meet-Amy
   block, details section, WhatsApp banner, FAQ accordion, mobile sticky CTA.

   AMY: $blockStart is the only thing to set. PHP comment, nothing reaches the
   browser. e.g. '11 September'. Leave it as '' and the page falls back to
   "September start, but join any time" rather than showing a date that is wrong.
   ========================================================================= */
$blockStart = '';

$sessionPrice = 35;
$blockMin     = 5;
$blockMax     = 8;
$waLink = 'https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27d%20like%20to%20find%20out%20more%20about%20the%20Year%207%20Accelerator%20group';
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
        content="Year 7 Accelerator: a weekly online maths group for able Year 7s who are bored of repeating Year 6. Algebra early, real problem solving, maximum 5 students." />
    <title>Year 7 Accelerator | Maths for Able Year 7s | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/x-icon" href="./assets/images/logo-red.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/year-7-accelerator" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/year-7-accelerator">
    <meta property="og:title" content="Year 7 Accelerator | Maths for Able Year 7s | Maths Tutoring With Amy">
    <meta property="og:description" content="A weekly online maths group for able Year 7s who are bored of repeating Year 6. Algebra early, real problem solving, maximum 5 students.">
    <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-at-desk-wearing-skirt-2026.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

    <?php /* AMY: the study club page fires your Meta pixel. I have left it out here
       on purpose, because firing PageView for a different product muddies the ad
       audiences you built for the study club. If you do run Meta ads at this page,
       copy the fbq block from study-club.php lines 42 to 70 into this spot. */ ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Year 7 Accelerator: Algebra and Problem Solving",
      "description": "A weekly online small group for able Year 7 students, building algebraic fluency early and applying it to geometric and numerical problem solving.",
      "url": "https://www.mathstutoringwithamy.co.uk/year-7-accelerator",
      "educationalLevel": "Key Stage 3",
      "provider": {
        "@type": "EducationalOrganization",
        "name": "Maths Tutoring With Amy",
        "sameAs": "https://www.mathstutoringwithamy.co.uk"
      },
      "offers": {
        "@type": "Offer",
        "price": "<?php echo $sessionPrice; ?>",
        "priceCurrency": "GBP",
        "availability": "https://schema.org/LimitedAvailability"
      },
      "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "online",
        "courseWorkload": "PT1H",
        "maximumAttendeeCapacity": 5
      }
    }
    </script>
</head>

<body class="has-sticky-cta">
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section hero-section-study-hub">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h1 class="hero-title">Year 7 Maths Accelerator Group</h1>
                            <h2 class="hero-subhead">For Able Year 7s Who Are Bored of Repeating Year 6</h2>
                            <p class="hero-subtitle mb-4">A weekly online group of no more than five, taught live by a qualified secondary maths teacher. We will cover new content they might not have seen before and get them interested and challenged again.</p>

                            <!-- Social Proof -->
                            <div class="text-center text-lg-start mb-4">
                                <div class="d-inline-flex align-items-center bg-white bg-opacity-10 rounded-pill px-4 py-2">
                                    <span class="me-2">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                                    <small class="fw-medium text-white">"He always comes away from the lesson on a high. The confidence he has now gained is wonderful" - Emma, KS3 Parent</small>
                                </div>
                            </div>

                            <div class="text-center text-lg-start">
                                <a href="#signup" class="btn btn-cta-green btn-lg">Ask About a Place</a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center mt-4 mt-lg-0">
                            <img src="./assets/images/amy-at-desk-wearing-skirt-2026.jpg" alt="Amy, qualified maths teacher, at her desk with a laptop and graphics tablet ready to teach online" class="img-fluid" width="2596" height="2928" style="border-radius: 12px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); max-width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Banner -->
    <section class="py-3" style="background: var(--surface-alt);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="mb-0 fw-bold" style="font-size: 1.05rem;">Thursdays 6 to 7pm Live Online Lesson &middot; Maximum 5 Students &middot; Half-Term Blocks, England Term Time<?php
                        if ($blockStart !== '') { echo ' &middot; Next Block Starts ' . htmlspecialchars($blockStart); }
                    ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Is the Year 7 Accelerator Right For Your Child? -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h2>Is the Year 7 Accelerator Right For Your Child?</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <?php /* AMY: the study club has a 2-minute video in this slot and it is the
                               single best thing on that page. Film the equivalent for this group and
                               swap it in here, replacing the img with the study club's iframe markup.
                               Until then a photo of the classroom holds the space. */ ?>
                            <img src="./assets/images/pencil-workings.png" alt="A shared interactive whiteboard with a student's maths workings" class="img-fluid photo-frame" width="1018" height="910" loading="lazy">
                            <p class="text-center photo-caption">Lessons run on Pencil Spaces, a shared digital classroom rather than a video call.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-4">If your child sailed through primary maths and now finds Year 7 a bit slow or boring, you are not alone. This group is for you if:</p>
                            <ul class="fa-ul" style="font-size: 1.05rem; list-style-position: outside;">
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    Your child <strong>did well at primary maths</strong> and often found it a bit easy
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    They have started Year 7 and worked out that <strong>a lot of it is a repeat</strong> of what they already know
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    You can <strong>see the interest fading</strong>, and it bothers you
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    They would enjoy being <strong>alongside other children who genuinely like maths</strong>
                                </li>
                            </ul>
                            <p class="mb-0"><strong>And who it is not for.</strong> If your child is still shoring up the basics, this is the wrong group and it would do more harm than good. Schools spend Year 7 consolidating for a good reason. If that is where your child is, one to one lessons are the better route and I will tell you so.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Everything Your Child Gets -->
    <section class="section fade-in bg-accent-light">
        <div class="container">
            <div class="section-title">
                <h2>Everything Your Child Gets Every Week</h2>
            </div>

            <?php /* AMY: the study club's 1.png to 6.png icons were picked for its own content
               (a meditating brain for mindset, Q&A speech bubbles, an "AWESOME" character for
               the prize draw) and they are in three different illustration styles. Four of the
               six made no sense against this copy, so these are FontAwesome glyphs in ink at
               the same 60px footprint. Same grid, same layout, consistent style. */ ?>
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-video me-3 benefit-icon" aria-hidden="true"></i>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Weekly Live Lesson</h5>
                            <p class="mb-2">A lesson taught live on a shared interactive whiteboard, so I see your child's working as they do it rather than just the final answer. Very interactive, not just sitting and listening.</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--ink);">
                                <span class="fw-bold" style="color: var(--ink);">Thursdays 6 to 7pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-lightbulb me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">Material They Have Not Seen Before</h5>
                            <p class="mb-0">We will cover new or more difficult material they haven't seen before, or at a difficulty they are not being exposed to at school.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-superscript me-3 benefit-icon" aria-hidden="true"></i>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Algebra, Years Earlier Than School</h5>
                            <p class="mb-2">Algebra is so important to their long term success in maths, and this group is designed to start giving them fluency with algebra early.</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--ink);">
                                <span class="fw-bold" style="color: var(--ink);">For long term success in GCSE and A Level</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-users me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">A Group of Five, Maximum</h5>
                            <p class="mb-0">I find that 5 students is a good amount, enough that they can bounce ideas off each other, but few enough that they still get individual attention.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title mt-5 pt-4">
                <h3 class="fw-bold" style="color: var(--ink);">What This Group Does Not Do</h3>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 text-center">
                    <i class="fas fa-times mb-3 benefit-icon benefit-icon-no" aria-hidden="true"></i>
                    <h5 class="fw-bold">Help To Prepare for Year 7 Exams</h5>
                    <p>This group is not designed for success in Year 7 exams. The focus is much bigger and more important than that: they are developing skills that will help them succeed later on at GCSE and A Level. They are going to find joy in trying new and difficult topics.</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <i class="fas fa-times mb-3 benefit-icon benefit-icon-no" aria-hidden="true"></i>
                    <h5 class="fw-bold">Help Students Struggling with the Basics</h5>
                    <p>This group is designed to push students beyond what they normally do in Year 7. To make sure your child is right for the group we will always have a talk together first, and do an initial trial lesson to see if the fit is right.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Amy Section -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-center mb-4 mb-lg-0">
                            <img src="./assets/images/amy-crossed-arms.jpg" alt="Amy, qualified secondary maths teacher" class="img-fluid amy-professional-img">
                            <div class="mt-3">
                                <p class="mb-1"><strong>Amy</strong></p>
                                <p class="mb-0" style="font-size: 0.9rem; color: var(--ink-soft);">Qualified Teacher &bull; 12 Years in the Classroom</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <h2 class="mb-4">Why Trust Me With Your Child's Maths?</h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>12 years</strong> teaching secondary maths, Year 7 through to Year 13</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>Qualified teacher</strong> with QTS, and an enhanced DBS</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>Five star rated on Google</strong> by the families I work with</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>I have taught this exact age group</strong> for most of my career, in state and independent schools</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>An honest answer, always</strong> - if the group is not right for your child, I will let you know. I only want students who will really benefit from the group.</li>
                            </ul>
                            <p>I built this group because of a pattern I saw in every school I worked in. The able Year 7s were always the easiest students to leave alone: they were fine, they were getting everything right, and there were many other children in the room who needed me more.</p>
                            <p class="mb-0"><strong>Unfortunately, Year 7 and 8 can sometimes feel like the wasted years for these children, and by the time Year 9 rolls around they have lost their edge and their enjoyment.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Problem -->
    <section class="section fade-in bg-accent-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-4">What Exactly Is Happening in Schools</h2>

                    <p>Your child enjoyed maths at primary school, even if it often felt a bit easy. They scored well in tests, their teachers said good things, and there was real excitement about starting secondary school and finally getting into something new. Harder than Year 6 was simply what everyone expected.</p>

                    <p>Then Year 7 started, and I imagine your child worked out fairly quickly that a lot of it was a repeat. Column addition and subtraction, short division, the topics they had already mastered in Year 5 or earlier. If they are lucky their teacher hands them extension questions to hold the boredom off, but that is a great deal to ask of one teacher with thirty students in front of them.</p>

                    <p class="pull-statement">If your child is the able one who already thrived in Year 6, Year 7 can feel like being put on pause.</p>

                    <p class="mb-0">I do understand why schools teach it this way, and the students who arrive without secure foundations need that year. But the ones who already had them rarely get what they need, and this is the year a lot of able children quietly decide that maths is boring. In every other subject they are learning something new. In maths they are going back over old ground, and the interest drains away faster than most parents expect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Cover -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <img src="./assets/images/pencil-lesson-crop.png" alt="A worked maths problem from a lesson" class="img-fluid photo-frame mb-4" width="995" height="752" loading="lazy">
                            <img src="./assets/images/amy-desk-white-shirt-blue-trousers-2026.webp" alt="Amy at her home desk, with a maths problem open on the laptop and her graphics tablet beside the keyboard" class="img-fluid photo-frame" width="2749" height="2146" loading="lazy">
                        </div>
                        <div class="col-lg-7 ps-lg-5">
                            <h2 class="mb-4">What We Cover</h2>
                            <?php /* AMY: your edit added algebra as the first bullet here and dropped the
                               "begins in block two" badge above, so the old intro line ("Algebra starts in
                               the second block") now contradicted the list. I rewrote that one sentence.
                               If algebra really does start in block two, tell me and I will put it back
                               and move the algebra bullet down. */ ?>
                            <p class="mb-4">A lot of what we do is rooted in algebra, and the rest is chosen to build the kind of reasoning that makes algebra land properly.</p>

                            <?php /* AMY: the strongest possible addition to this page is one real question
                               from a lesson, screenshotted, sitting right here. Describing the level
                               convinces nobody. Showing a parent a problem their bright Year 7 would
                               find hard and enjoy does it instantly. */ ?>
                            <ul class="plain-list">
                                <li><strong>Algebra.</strong> A lot of what we will do will be rooted in algebra. We will cover solving equations, expanding and factorising, substitution and rearranging. All skills that are essential to long term maths success.</li>
                                <li><strong>Number theory.</strong> Primes, divisibility and factor puzzles. Real mathematical thinking with almost no prerequisites, which is exactly why it is such a good place to start.</li>
                                <li><strong>Angle chasing and polygons.</strong> Geometric reasoning where every step has to be justified. Students who can do this find GCSE geometry straightforward years later.</li>
                                <li><strong>Working backwards with area and perimeter.</strong> Given the answer, find the shape. The same Year 7 topic their class is doing, turned around so that it genuinely requires thought.</li>
                                <li><strong>Fractions and ratio problem solving.</strong> This topic takes up a surprising amount of the current curriculum, and so it will be another key focus for our year.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Details -->
    <section id="pricing" class="section fade-in bg-accent-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Important Details</h2>
                        <p>Before I sign your child up for this it would be great if we could have a conversation, on the phone, on a video call or on WhatsApp, so we can discuss whether this group is suited to your child</p>
                    </div>

                    <p class="price-headline">&pound;<?php echo $sessionPrice * $blockMin; ?> to &pound;<?php echo $sessionPrice * $blockMax; ?> <span>per half term</span></p>
                    <p class="mb-4">Works out to &pound;<?php echo $sessionPrice; ?> per session. A half term is <?php echo $blockMin; ?> to <?php echo $blockMax; ?> sessions, which is where the range comes from.</p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Weekly live hour, taught by me</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Maximum 5 students in the room</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Algebra and problem solving beyond the curriculum</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Join mid-block and pay pro-rata, catch-up included</li>
                    </ul>

                    <a href="#signup" class="btn btn-cta-green btn-lg">Ask About a Place</a>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Banner -->
    <section class="whatsapp-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-3">Still Got Questions?</h3>
                    <p class="mb-4" style="font-size: 1.1rem;">Message me directly on WhatsApp and tell me a bit about your child. I will give you an honest answer about whether the group suits them.</p>
                    <a href="<?php echo $waLink; ?>" target="_blank" rel="noopener" class="whatsapp-btn">
                        <i class="fab fa-whatsapp" style="font-size: 1.5rem;"></i>
                        Message Me on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="faq-item">
                        <h5 class="faq-question">Won't they just be bored when school teaches this later? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Honestly, probably a bit, and I would rather say that than pretend otherwise. However, hard algebra usually arrives in Year 9 or 10, and students are asked to learn it from scratch and master the hardest questions on it at the same time, while nine other GCSEs compete for their attention. A child who arrives already fluent skips that stage entirely and spends the time pushing to the top of the paper instead. Set against that, a handful of familiar lessons in Year 8 is a small price to pay for this longer term gain.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">What if my child misses a lesson? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>If they miss a lesson they will be provided with a recording of the session.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Can we join partway through a block? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Yes, if there is a place free. You are billed pro-rata for the sessions that are left.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Is this better than one to one tutoring? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>For this particular child, often yes. An able Year 7 who is bored does not need remedial attention, they need harder material and other children to bounce off. If your child has actual gaps to close, one to one might be the better route.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">What if my child is not ready for it? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Then I let you know before you pay for anything. This group is not for students who are still shoring up the basics, and pushing a child who is not secure would do more harm than good. Schools repeat Year 6 material for a good reason: most students genuinely need that year.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">What do we need at home? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>A laptop or tablet with a working microphone, and a quiet spot to sit for the hour. Lessons run on Pencil Spaces, a shared digital classroom including a video call, so your child writes on the same board I do. A cheap graphics tablet or an iPad is essential for writing on the screen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sign-Up Section -->
    <section id="signup" class="section fade-in bg-accent-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-4">
                        <h2>Ask About a Place</h2>
                        <p class="lead">Message me and tell me a bit about your child. We will work out together whether the group is right, and I will tell you honestly if it is not.</p>
                        <p style="color: var(--ink-soft);">Thursdays 6 to 7pm &middot; Maximum 5 students &middot; <?php
                            if ($blockStart !== '') {
                                echo 'Next block starts ' . htmlspecialchars($blockStart);
                            } else {
                                echo 'September start, but join any time';
                            }
                        ?></p>
                    </div>

                    <div class="text-center">
                        <a href="<?php echo $waLink; ?>" target="_blank" rel="noopener" class="whatsapp-button">
                            <i class="fab fa-whatsapp" style="font-size: 1.5rem;"></i>
                            Message me on WhatsApp
                        </a>
                        <p class="mt-3 mb-0"><a href="/contact" class="quiet-link">Or book a free video call instead</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Sticky CTA -->
    <div class="mobile-sticky-cta">
        <a href="#signup" class="btn btn-cta-green w-100 btn-lg">Ask About a Place</a>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', event => {
                const faqAnswer = item.nextElementSibling;
                const arrow = item.querySelector('.arrow');

                // Close other FAQs
                document.querySelectorAll('.faq-answer').forEach(answer => {
                    if (answer !== faqAnswer && answer.classList.contains('show')) {
                        answer.classList.remove('show');
                        answer.previousElementSibling.querySelector('.arrow').textContent = '▼';
                    }
                });

                // Toggle current FAQ
                faqAnswer.classList.toggle('show');
                arrow.textContent = faqAnswer.classList.contains('show') ? '▲' : '▼';
            });
        });

        // Record WhatsApp clicks in GA4 so the conversion this page optimises for is measurable
        document.querySelectorAll('a[href*="wa.me"]').forEach(function(link) {
            link.addEventListener('click', function() {
                if (typeof gtag === 'function') {
                    gtag('event', 'whatsapp_click', {
                        link_location: link.closest('section') ? link.closest('section').className : 'unknown'
                    });
                }
            });
        });
    </script>

</body>

</html>
