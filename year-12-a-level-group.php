<?php
/* ============================================================================
   A LEVEL MATHS MASTERY GROUP: YEAR 12 (EDEXCEL)
   Built to the same structure as year-7-accelerator.php: ink hero, schedule
   banner, "is it right" row, benefit grid, meet-Amy block, the problem, how the
   year runs, details, how a place works, WhatsApp banner, FAQ, sticky CTA.

   AMY: $blockStart is the only thing to set. PHP comment, nothing reaches the
   browser. e.g. '9 September'. Leave it as '' and the page falls back to
   "September start, but join any time" rather than showing a date that is wrong.

   AMY: the "needs at least 3 students by Christmas to continue" caveat is
   deliberately NOT on this page. Your decision was to say it to families case by
   case, and to put it in the first family's booking confirmation email so it
   exists in writing.
   ========================================================================= */
$blockStart = '';

$sessionPrice = 50;
$blockMin     = 5;
$blockMax     = 8;
$waLink = 'https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27d%20like%20to%20find%20out%20more%20about%20the%20Year%2012%20A%20Level%20Maths%20Mastery%20Group';
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
        content="A Level Maths Mastery Group for Year 12 (Lower Sixth): a small weekly online Edexcel group for students aiming for an A or a B. Maximum 5 students, exam questions marked personally every week." />
    <title>A Level Maths Mastery Group: Year 12 | Edexcel Group | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/x-icon" href="./assets/images/logo-red.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/year-12-a-level-group" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/year-12-a-level-group">
    <meta property="og:title" content="A Level Maths Mastery Group: Year 12 | Edexcel Group | Maths Tutoring With Amy">
    <meta property="og:description" content="A Level Maths Mastery Group (Year 12): a small weekly online Edexcel group for students aiming for an A or a B. Maximum 5 students, exam questions marked personally every week.">
    <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-at-desk-wearing-skirt-2026.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

    <?php /* AMY: no Meta pixel here, same reasoning as the Year 7 page. Firing
       PageView for a different product muddies the ad audiences built for the
       study club. If you run Meta ads at this page, copy the fbq block from
       study-club.php lines 42 to 70 into this spot. */ ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "A Level Maths Mastery Group: Year 12 (Edexcel)",
      "description": "A weekly online small group for Year 12 Edexcel A Level Maths students, building a secure foundation across the Year 12 course with personally marked exam questions every week.",
      "url": "https://www.mathstutoringwithamy.co.uk/year-12-a-level-group",
      "educationalLevel": "A Level",
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
                            <h1 class="hero-title">A Level Maths Mastery Group: Year 12</h1>
                            <h2 class="hero-subhead">Excel From the Start</h2>
                            <p class="hero-subtitle mb-4">Many students get complacent at the start of Year 12 and rapidly fall behind. Year 12 success is crucial for overall A Level Maths success. This is a small weekly Edexcel group, with no more than five students, taught live by me, a qualified secondary maths teacher, for Year 12s (Lower Sixth) who want a strong start to A Level maths.</p>

                            <!-- Social Proof -->
                            <div class="text-center text-lg-start mb-4">
                                <div class="d-inline-flex align-items-center bg-white bg-opacity-10 rounded-pill px-4 py-2">
                                    <span class="me-2">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                                    <small class="fw-medium text-white">"Through her teaching methods, I was able to succeed in the subject achieving an A* grade" - Ethan, A Level Maths Student</small>
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
                    <p class="mb-0 fw-bold" style="font-size: 1.05rem;">Tuesdays 6 to 7pm Live Online Lesson &middot; Edexcel A Level Maths &middot; Maximum 5 Students &middot; Half-Term Blocks, England Term Time<?php
                        if ($blockStart !== '') { echo ' &middot; Next Block Starts ' . htmlspecialchars($blockStart); }
                    ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Is This Year 12 Group Right For Your Child? -->
    <section class="section fade-in" style="background: var(--surface);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h2>Is This Year 12 Group Right For Your Child?</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <?php /* AMY: the study club has a 2-minute video in this slot and it is the
                               single best thing on that page. If you film the equivalent for this group,
                               swap it in here, replacing the img with the study club's iframe markup.
                               Until then a photo of the classroom holds the space. */ ?>
                            <img src="./assets/images/pencil-workings.png" alt="A shared interactive whiteboard with a student's maths workings" class="img-fluid photo-frame" width="1018" height="910" loading="lazy">
                            <p class="text-center photo-caption">Lessons run on Pencil Spaces, a shared digital classroom rather than just a video call.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-4">This group is for students who enjoyed maths at GCSE, considered themselves good at it, and chose it for A Level. It is for you if:</p>
                            <ul class="fa-ul" style="font-size: 1.05rem; list-style-position: outside;">
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    Your child is in <strong>Year 12 (Lower Sixth) studying Edexcel A Level Maths</strong>
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    They came out of GCSE with a <strong>grade 7 and they are aiming for an A or a B</strong>
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    Or they got a <strong>grade 8 and are capable but underconfident</strong>, which is more common than most parents realise
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    You know that <strong>A Level Maths is challenging</strong> and you want them supported from the start
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--yes);"></i></span>
                                    You want the <strong>foundation built properly now</strong>, rather than a rescue job in the spring
                                </li>
                            </ul>
                            <p class="mb-3"><strong>Grade 6 students, honestly.</strong> A 6 makes A Level maths really quite difficult. Your child can still join, but only after a conversation with me first, and only if they are prepared to work really hard to close the gap. I would rather say this now than have an awkward conversation later down the line. If you want some advice on whether your Grade 6 child should even be doing A Level Maths, then please get in touch and I'm happy to advise you.</p>
                            <p class="mb-0"><strong>And who it is not for.</strong> Students who are already flying and want stretch beyond the course, who got a Grade 9 at GCSE, or who are aiming for an A*, and it's not for students who have already fallen a long way behind. This group is about getting the foundation right from the start to set them up for success in Year 13.</p>
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

            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-video me-3 benefit-icon" aria-hidden="true"></i>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Weekly Live Lesson</h5>
                            <p class="mb-2">An hour taught live on a shared interactive whiteboard, so I see your child's working as they do it rather than just the final answer. Very interactive, not sitting and listening.</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--ink);">
                                <span class="fw-bold" style="color: var(--ink);">Tuesdays 6 to 7pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-mountain me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">The Hardest Questions, Done with Proper Attention</h5>
                            <p class="mb-0">At the end of every textbook exercise sit the hardest questions that rarely get done properly. We do them, at the time, in full. Most exam questions are pitched at exactly that level, not the easy questions at the start of the exercise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-comments me-3 benefit-icon" aria-hidden="true"></i>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Exam Questions I Mark Myself</h5>
                            <p class="mb-2">Two to three exam questions a week, marked by me personally with video, audio or written feedback, whichever suits the work. Not just a mark scheme to tell them what they have got wrong and why.</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--ink);">
                                <span class="fw-bold" style="color: var(--ink);">Marking included</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-clipboard-check me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">An Independent Task They Mark Themselves</h5>
                            <p class="mb-0">Honest self-checking is a skill in itself, and it is the one most Year 12s never learn. They send me a short written reflection on how it went, and I read every one.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-users me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">A Group of Five, Maximum</h5>
                            <p class="mb-0">Five students is enough that they can bounce ideas off each other, and few enough that they still get individual attention from me every week.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-school me-3 benefit-icon" aria-hidden="true"></i>
                        <div>
                            <h5 class="fw-bold">In Step with Their School</h5>
                            <p class="mb-0">I keep a running record of what each student has covered, so sessions work on topics everyone has already met at school rather than running on a separate track.</p>
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
                    <h5 class="fw-bold">Stretch Beyond the A Level Course</h5>
                    <p>If your child is already flying and wants olympiad-style problems or work beyond the specification, or they are only interested in getting an A*, this is not the right group. The work here is the A Level course, taught to the top of its difficulty, which is a different thing.</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <i class="fas fa-times mb-3 benefit-icon benefit-icon-no" aria-hidden="true"></i>
                    <h5 class="fw-bold">Rescue a Student Who Is Far Behind</h5>
                    <p>This is a foundation, not a rescue service. If your child has already fallen a long way behind, the <a href="/recovery">Year 12 Recovery Course</a> or one to one lessons will do more for them. We can discuss this once you get in touch.</p>
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
                            <h2 class="mb-4">Why Trust Me With Your Child's A Level?</h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>12 years</strong> teaching secondary maths, Year 7 through to Year 13</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>Edexcel specialist</strong>, so I know how the questions are built and what the examiners are looking for</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>Qualified teacher</strong> with QTS, and an enhanced DBS</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>Five star rated on Google</strong> by the families I work with</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> <strong>An honest answer, always</strong> - if the group is not right for your child, I will tell you. I only want students who will really benefit from it.</li>
                            </ul>
                            <p>I have spent years picking up Year 13 students in a panic, and the story is nearly always the same. Year 12 went fine, or seemed to at the start, and suddenly their Year 12 mocks were very disappointing, and they were starting Year 13 with a mountain of Year 12 catch up to do.</p>
                            <p class="mb-0"><strong>By then you are rebuilding a whole year of maths in the middle of the hardest year of the course. It is much better to do it properly the first time.</strong></p>
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
                    <h2 class="mb-4">What Actually Goes Wrong in Year 12</h2>

                    <p>Almost every student starts Year 12 (Lower Sixth) maths feeling confident. The opening chapters are manageable, often easier than they expected, and that is exactly the trap. They get comfortable quickly: do the homework, nothing more, no going back over anything.</p>

                    <p class="pull-statement">The easy start is the downfall.</p>

                    <p>The complacency shows up in a specific place. At the end of every textbook exercise sit the hardest questions, and they rarely get done properly. Half attempted, answers alongside, no honest self-checking. Students later complain that the textbook did not prepare them for the exam, but most exam questions are pitched at exactly the level of those final questions. A student who genuinely masters them is a long way towards understanding how difficult questions are built.</p>

                    <p>Then there is the cliff. Year 13 is significantly harder than Year 12, which makes Year 12 more important, not less. Students need to walk into Year 13 with the Year 12 content secure, so that all of their headspace goes on the new material. The ones who drifted through Year 12 spend Year 13 keeping their head above water, relearning things they never learned in depth, right when the course demands the most of them.</p>

                    <p class="mb-0">The last failure mode is past papers. When revision finally feels urgent there is no time to revisit every chapter properly, so students cram papers back to back instead. But past papers only sample the course, and doing paper after paper without going back to the concepts in between is not revision. Glancing at a mark scheme and thinking "that makes sense" is not the same as understanding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How the Year Runs -->
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
                            <h2 class="mb-4">How the Year Runs</h2>
                            <p class="mb-4">This group runs the whole year the other way round from the way it usually goes.</p>

                            <ul class="plain-list">
                                <li><strong>The hardest questions, at the time.</strong> Not saved for revision, not half attempted with the answers open. We work through them properly in the week the topic is taught, while it is still fresh.</li>
                                <li><strong>Content revisited before it fades.</strong> We continuously revisit old topics all year so that they stay fresh and do not need cramming when the exams come around.</li>
                                <li><strong>Exam questions marked every week.</strong> Two or three of them, marked by me with personalised feedback, so your child knows what to do to improve each week.</li>
                                <li><strong>Honest self-checking, taught as a skill.</strong> The independent task each week is marked by your child, with a short, written reflection I read. Mastering this independent revision work is essential.</li>
                                <li><strong>Year 13 in mind all year.</strong> Everything here exists so that your child walks into Year 13 with Year 12 secure and their full attention free for the new material.</li>
                            </ul>

                            <h3 class="column-heading mt-5">Working Alongside School</h3>
                            <p class="mb-0">Every student finds out from their teacher the order their school is teaching the course, and shares it with me. This is a requirement of joining. I keep a running record of what each student has covered, so the group stays relevant to their week at school instead of running on a separate track.</p>
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
                        <p>Before I sign your child up for this it would be great if we could have a conversation, on the phone, on a video call or on WhatsApp, so we can talk about their GCSE result and what they want from A Level</p>
                    </div>

                    <p class="price-headline">&pound;<?php echo $sessionPrice * $blockMin; ?> to &pound;<?php echo $sessionPrice * $blockMax; ?> <span>per half term</span></p>
                    <p class="mb-4">Works out to &pound;<?php echo $sessionPrice; ?> per session. A half term is <?php echo $blockMin; ?> to <?php echo $blockMax; ?> sessions, which is where the range comes from. Billed per half term in advance.</p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Weekly live hour, Tuesdays 6 to 7pm, taught by me</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Edexcel A Level Maths only</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Maximum 5 students in the room</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Homework and personally marked exam questions, included</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> A fixed group for the whole of Year 12 (Lower Sixth), September through to summer</li>
                        <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--yes);"></i> Join mid-block and pay pro-rata for the sessions that are left</li>
                    </ul>

                    <a href="#signup" class="btn btn-cta-green btn-lg">Ask About a Place</a>
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
                        <p class="mb-0">You, your child and me, talking about their GCSE result and what they actually want out of A Level maths. It usually takes twenty minutes and it tells me most of what I need to know.</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="step-heading">2. A trial lesson</h3>
                        <p class="mb-0">If it looks like the right fit, your child sits a trial lesson with the group before you commit to a block. You will just pay &pound;<?php echo $sessionPrice; ?> for the first lesson, and then decide if you want to commit to the whole block.</p>
                    </div>

                    <div>
                        <h3 class="step-heading">3. The honest conversation, where it is needed</h3>
                        <p class="mb-0">One of my core values in my tutoring practice is honesty. If I think this group is not right for your child I will tell you. Schools often do not honestly answer questions, for many reasons, but I am happy to.</p>
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
                    <p class="mb-4" style="font-size: 1.1rem;">Message me directly on WhatsApp and tell me a bit about your child and their GCSE grade. I will give you an honest answer about whether the group suits them.</p>
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
                        <h5 class="faq-question">My child got a 7 and is finding the start fine. Surely they will be OK? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Finding the start manageable is normal, nearly everyone does, and it tells you almost nothing. The students who come unstuck in Year 12 are very often the ones who found the first term comfortable and assumed it would stay that way. A weekly hour of structured teaching, plus marked exam questions with real feedback, is a modest cost next to a year of catch-up one to one lessons once the gaps have compounded.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Would you continue with my child in Year 13? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>If you want to continue beyond Year 12, we will have a conversation about what is most appropriate. That might be another group if one is running, or one to one tutoring with me or with one of my associate tutors. I have a Year 13 exam maths specialist I would happily hand a student to.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">My child got a grade 6. Can they join? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Possibly, but we talk first. A 6 makes A Level maths genuinely difficult, and it only works if your child is prepared to work hard to close the gap alongside the group.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Is this instead of one to one tutoring? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>For a student in this position, usually yes. They do not need remedial attention, they need harder work, proper marking and other students working at the same level. If your child has real gaps to close, one to one is the better route. One to one lessons are charged at &pound;85 per session, with a marked homework every week.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">How much homework is there? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>An independent task your child marks themselves, with a short, written reflection, plus two to three exam questions I mark. It is designed to sit alongside school work, not compete with it, and the marking is included in the fee rather than charged on top.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">What if my child misses a lesson? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>They will be sent a recording of the session, and the homework goes out as usual so they do not fall out of step with the group.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Can we join partway through a block? <span class="arrow">&#9660;</span></h5>
                        <div class="faq-answer">
                            <p>Yes, if there is a place free. You are billed pro-rata for the sessions that are left.</p>
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
                        <p class="lead">Message me and tell me a bit about your child, their GCSE grade (or predicted) and what they want from A Level. We will work out together whether the group is right, and I will tell you honestly if it is not.</p>
                        <p style="color: var(--ink-soft);">Tuesdays 6 to 7pm &middot; Maximum 5 students &middot; <?php
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
                        <p class="mt-3 mb-1"><a href="/contact" class="quiet-link">Or book a free video call instead</a></p>
                        <p class="mb-0"><a href="mailto:amy@mathstutoringwithamy.co.uk" class="quiet-link">Or email me at amy@mathstutoringwithamy.co.uk</a></p>
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
