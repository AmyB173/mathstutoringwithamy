<?php
/* ============================================================================
   GCSE FOUNDATION MATHS GROUP: AIMING FOR GRADE 5 (EDEXCEL AND AQA)
   Year 11 only. Built to the same structure as year-12-a-level-group.php: ink
   hero, schedule banner, "is it right" row, benefit grid, meet-Amy block,
   details, how a place works, WhatsApp banner, FAQ, sticky CTA.

   AMY: no start date on this page by your decision. $blockMin/$blockMax are the
   sessions in a half-term block and drive the price range shown. PHP comments
   only, nothing here reaches the browser.
   ========================================================================= */
$sessionPrice = 40;
$maxStudents  = 5;
$blockMin     = 5;
$blockMax     = 8;
$waLink = 'https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27d%20like%20to%20find%20out%20more%20about%20the%20GCSE%20Foundation%20Maths%20Group';
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
        content="A small weekly online GCSE Foundation maths group for Year 11 students aiming for a grade 5. Edexcel and AQA, maximum 5 students, taught live by a qualified secondary maths teacher, with homework marked personally every week." />
    <title>GCSE Foundation Maths Group: Aiming for Grade 5 | Edexcel and AQA | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/gcse-foundation-group" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/gcse-foundation-group">
    <meta property="og:title" content="GCSE Foundation Maths Group: Aiming for Grade 5 | Maths Tutoring With Amy">
    <meta property="og:description" content="A small weekly online GCSE Foundation maths group for students aiming for a grade 5. Edexcel and AQA, taught live by a qualified maths teacher, with homework marked personally every week.">
    <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-at-desk-wearing-skirt-2026.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "GCSE Foundation Maths Group: Aiming for Grade 5 (Edexcel and AQA)",
      "description": "A weekly online small group for Year 11 GCSE Foundation tier maths students aiming for a grade 5, teaching the topics that move a grade 3 or 4 up to a 5, with homework marked personally every week.",
      "url": "https://www.mathstutoringwithamy.co.uk/gcse-foundation-group",
      "educationalLevel": "GCSE",
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
        "courseWorkload": "PT55M",
        "maximumAttendeeCapacity": <?php echo $maxStudents; ?>
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
                            <h1 class="hero-title">GCSE Foundation Maths Group: Aiming for Grade 5</h1>
                            <h2 class="hero-subhead">A small Year 11 group, all aiming for the highest foundation GCSE grade</h2>
                            <p class="hero-subtitle mb-4">This is a small, interactive group of Year 11 students all working together to pass GCSE maths. It is a positive and encouraging space which will support your child academically and with their confidence.</p>

                            <div class="text-center text-lg-start">
                                <a href="#signup" class="btn btn-cta-green btn-lg">Ask about a place</a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center mt-4 mt-lg-0">
                            <img src="./assets/images/amy-at-desk-wearing-skirt-2026.jpg" alt="Amy, qualified maths teacher, at her desk with a laptop and graphics tablet ready to teach online" class="img-fluid" width="1400" height="1579" style="border-radius: 12px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); max-width: 300px;">
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
                    <p class="mb-0 fw-bold" style="font-size: 1.05rem;">Tuesdays 5pm, 55-Minute Live Online Lesson &middot; GCSE Foundation Maths, Year 11 &middot; Edexcel and AQA &middot; Maximum <?php echo $maxStudents; ?> Students &middot; Term Time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Is This Group Right For Your Child? -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h2>Is This Group Right For Your Child?</h2>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <img src="./assets/images/pencil-workings.png" alt="A shared interactive whiteboard with a student's maths workings" class="img-fluid photo-frame" width="1018" height="910" loading="lazy">
                            <p class="text-center photo-caption">Lessons run on Pencil Spaces, a shared digital classroom rather than just a video call. Students write on the same board I do.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-3">This group is right for your child if:</p>
                            <ul class="fa-ul mb-4" style="font-size: 1.05rem; list-style-position: outside;">
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    They are in <strong>Year 11</strong>, entered for <strong>Foundation tier</strong> GCSE maths
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    They are currently working around a <strong>grade 2, 3 or 4</strong>
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    They <strong>sometimes struggle to believe in themselves</strong> and need someone to show them it's possible
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    A <strong>grade 5, a strong pass</strong>, is the goal
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    They can <strong>attend every week</strong> and are willing to put the effort into homework
                                </li>
                            </ul>
                            <p class="mb-0"><strong>And who it is not for.</strong> A grade 6 or above means Higher tier, which is a different group. And if your child is not willing to work outside the lessons, or you are looking for last-minute cramming with no ongoing commitment, this is not the right fit.</p>
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
                <h2>What Your Child Gets Every Week</h2>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-chalkboard-teacher me-3 benefit-icon" aria-hidden="true"></i>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Interactive Small-Group Teaching</h5>
                            <p class="mb-2">Fifty-five minutes taught live on a shared whiteboard, where the students write on the board themselves as we work. Not sitting and listening.</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--ink);">
                                <span class="fw-bold" style="color: var(--ink);">Tuesdays 5pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-users me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">A Room of Students at the Same Level</h5>
                            <p class="mb-0">Everyone is aiming for the same grade 5 and often struggling with similar things to each other. I have found that knowing they are not the only one finding a topic hard improves confidence, and progress comes faster because of it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-comments me-3 benefit-icon" aria-hidden="true"></i>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Homework I Mark Myself</h5>
                            <p class="mb-2">A focused piece every week on the topic just taught, marked by me personally with video, audio or written feedback, whichever suits the work.</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--ink);">
                                <span class="fw-bold" style="color: var(--ink);">Not designed to be too time consuming</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-clipboard-check me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">Exam Technique, Taught Directly</h5>
                            <p class="mb-0">Reading the question properly, showing method so the method marks are there even when the answer is wrong, and managing time so paper 1 does not run out before the end.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-file-alt me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">Past-Paper Questions from Their Exam Board</h5>
                            <p class="mb-0">They will see and be familiar with what actual exam questions look like, so nothing feels unfamiliar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-chart-line me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">Regular Updates on Progress</h5>
                            <p class="mb-0">We stay in regular contact over WhatsApp so you always know how your child is getting on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Amy Section -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-start">
                        <div class="col-lg-4 text-center mb-4 mb-lg-0">
                            <img src="./assets/images/amy-crossed-arms.jpg" alt="Amy, qualified secondary maths teacher" class="img-fluid amy-professional-img">
                            <div class="mt-3">
                                <p class="mb-1"><strong>Amy</strong></p>
                                <p class="mb-0" style="font-size: 0.9rem; color: var(--ink-soft);">Qualified Teacher &bull; 12 Years in the Classroom</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <h2 class="mb-4">Why Send Your Child to a Group Taught by Me?</h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> A <strong>qualified secondary maths teacher</strong> with QTS and an enhanced DBS</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>12 years in the classroom</strong> teaching Foundation GCSE, not just tutoring it</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> I know <strong>where the accessible marks are</strong> on a Foundation paper, and where students throw easy marks away</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>Five star rated on Google</strong> by the families I work with, plus lots of fabulous feedback that never makes it to Google</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> One of my <strong>core values is honesty</strong>, so you will know exactly what is happening, without any sugarcoating</li>
                            </ul>
                            <p>Let me tell you a bit about a student I had in this group last year. She had lost her confidence, and she was consistently getting grade 3s, even all the way through her Year 11 mocks. I spoke with her mum about her wavering confidence and we made sure to keep it as high as we could. It helped that other students in the group were stuck on a grade 3 too.</p>
                            <p>She did not stop working hard. She did not give up.</p>
                            <p>She came out at the end with a grade 5, and she was over the moon.</p>
                            <p class="mb-0">How did the group help? Not only with targeted revision on the topics she needed for a pass, but with confidence, self belief and motivation. One of the biggest things was having other students around her struggling with the same topics, so she knew she was not on her own with it. I am certain that was a huge part of it.</p>
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
                        <p>Before I sign your child up it would be good to have a conversation, on the phone, on a video call or on WhatsApp, about where they are now and what they need from GCSE maths.</p>
                    </div>

                    <p class="price-headline">&pound;<?php echo $sessionPrice; ?> <span>per session</span></p>
                    <p class="mb-4">They can try a one-off lesson first to see if it is for them. After that, it is billed half termly in advance. A half term is <?php echo $blockMin; ?> to <?php echo $blockMax; ?> sessions, so a bill comes to &pound;<?php echo $sessionPrice * $blockMin; ?> to &pound;<?php echo $sessionPrice * $blockMax; ?> depending on the length of the half term.</p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Weekly 55-minute live lesson, Tuesdays 5pm, taught by me, in term time</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> GCSE Foundation tier, Year 11, Edexcel and AQA</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Maximum <?php echo $maxStudents; ?> students in the room</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> A focused piece of homework each week, marked personally, included</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Lessons on Pencil Spaces, a shared digital classroom with a video call built in</li>
                    </ul>

                    <p class="mb-4" style="color: var(--ink-soft);">If you decide to stop, any unused pre-paid lessons are fully refunded, no questions asked.</p>

                    <a href="#signup" class="btn btn-cta-green btn-lg">Ask about a place</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How a Place Works -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>How a Place Works</h2>
                    </div>

                    <div class="mb-4">
                        <h3 class="step-heading">1. A conversation first</h3>
                        <p class="mb-0">We will have a talk about where your child is at, what they are personally struggling with and how we intend to work on that. It usually takes twenty minutes and it tells me most of what I need to know.</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="step-heading">2. A one-off lesson</h3>
                        <p class="mb-0">If it looks like the right fit, I always suggest your child sits a one-off lesson with the group first, so your child feels comfortable before committing. You will just pay &pound;<?php echo $sessionPrice; ?> for that first lesson, and then decide if you want to carry on.</p>
                    </div>

                    <div>
                        <h3 class="step-heading">3. The honest conversation, where it is needed</h3>
                        <p class="mb-0">If I feel your child is not motivated, or does not really want to do this, we will talk about whether tutoring is going to have much impact for them right now. Honesty is one of my core values, and I will not pretend if I feel this is not for them.</p>
                    </div>
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
                    <p class="mb-4" style="font-size: 1.1rem;">Message me on WhatsApp and tell me a bit about your child, their current grade and their exam board, and I will get back to you.</p>
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
                        <h5 class="faq-question">What is the difference between a grade 4 and a grade 5? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>A grade 4 is a standard pass and a grade 5 is a strong pass. Both count as a pass, but a number of college courses, sixth forms and apprenticeships specifically ask for a 5, and it also means your child does not have to resit maths alongside their next course.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Should my child be on Foundation or Higher? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Foundation is the right tier if a secure grade 4 or 5 is the realistic ceiling for now. Higher only makes sense if your child is genuinely aiming beyond a 5. If you are not sure, that is exactly what the first conversation and the one-off lesson are for, and I will give you an honest view.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Can they still get a 6 or 7 from this group? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>No. Foundation tier caps at a grade 5, so that is the most the paper allows. If your child is capable of more, they should be sitting Higher tier, and this is not the right group for them.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">My child has failed a mock. Is it too late? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Not necessarily. Last year I had a student go from a low grade 2 to a grade 4, just a few marks off a grade 5, in nine months. It is possible, but every case is different and it depends where in the year we are starting. We will talk honestly about what is realistic.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">How much homework is there? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>One focused piece a week. It is designed to sit alongside school work and be manageable, and the marking is included in the fee.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">What if my child misses a week? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>They are sent a recording of the session, and the homework still goes out, so they do not fall out of step with the group.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Do you follow our school's exam board? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Yes. The group covers Edexcel and AQA, which are quite similar at Foundation tier, and your child's homework is set in the style of their own board.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">What do we need at home? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>A laptop or tablet with a working microphone, a quiet spot for the lesson, and a scientific calculator. Lessons run on Pencil Spaces, a shared digital classroom with a video call built in, so your child writes on the same board I do. A cheap graphics tablet (I can recommend one) or an iPad makes writing on the screen much easier.</p>
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
                        <p class="lead">Message me and tell me a bit about your child, their current or predicted grade and their exam board, and I will get back to you soon.</p>
                        <p style="color: var(--ink-soft);">Tuesdays 5pm &middot; 55 minutes &middot; Year 11 &middot; Maximum <?php echo $maxStudents; ?> students &middot; Term time</p>
                    </div>

                    <div class="text-center">
                        <a href="<?php echo $waLink; ?>" target="_blank" rel="noopener" class="whatsapp-button">
                            <i class="fab fa-whatsapp" style="font-size: 1.5rem;"></i>
                            Message me on WhatsApp
                        </a>
                        <p class="mt-3 mb-1"><a href="/contact" class="quiet-link">Or book a free video call instead</a></p>
                        <p class="mb-0"><a href="mailto:amy@mathstutoringwithamy.co.uk" class="quiet-link">Or email me at amy@mathstutoringwithamy.co.uk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Sticky CTA -->
    <div class="mobile-sticky-cta">
        <a href="#signup" class="btn btn-cta-green w-100 btn-lg">Ask about a place</a>
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
