<?php
/* ============================================================================
   WHY START WITH A ONE-OFF LESSON
   The case for booking a single lesson before committing to a regular slot or
   a block. Built from Amy's "what I could tell you about me" reel: the
   credentials tell you I can teach, a first lesson tells you what it is like
   to be taught by me.

   AMY: the site says "one-off lesson" everywhere now, not "trial lesson" (that
   wording came out on 2 Sep). If you want "trial" back, it changes here, in the
   H1, the About dropdown label in navbar.php and the file name / URL.

   AMY: no price is stated on this page on purpose. The one-off lesson is charged
   at the normal single-lesson rate for the child's level, which lives on
   /tutoring-and-prices and is set in prices.php. One place to change it.

   AMY: the photo in section 3 is a placeholder (pencil-lesson-crop.png). Swap in
   one of the reel photos of you if you would rather, the frame and caption stay
   the same.
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
        content="Why I always suggest a single one-off lesson before your child takes a regular place. A full 55-minute lesson, taught live, so you and your child can see what my teaching is really like before committing to anything more." />
    <title>Why Start With a One-Off Lesson | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/png" href="/assets/images/favicon-petrol-48.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/one-off-lesson" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/one-off-lesson">
    <meta property="og:title" content="Why Start With a One-Off Lesson | Maths Tutoring With Amy">
    <meta property="og:description" content="A full 55-minute lesson, taught live, so you and your child can see what my teaching is really like before committing to anything more.">
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

    <!-- ================================================ 1. HERO
         Ink panel, same treatment as the group and prices pages. Title, one
         subheading, a short paragraph and a single action. -->
    <section class="hero-section hero-section-study-hub">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h1 class="hero-title">Why I start with a one-off lesson</h1>
                            <h2 class="hero-subhead">The things I could list about myself tell you I can teach maths. They do not tell you what it is like for your child to sit in one of my lessons.</h2>
                            <p class="hero-subtitle mb-4">So before your child takes a regular place with me, I suggest a single lesson first. It is a full 55-minute lesson, taught live, and afterwards you and your child decide whether to carry on. Nothing about it ties you to more.</p>

                            <div class="text-center text-lg-start">
                                <a href="<?php echo $waLink; ?>" class="btn btn-cta-pro btn-lg" target="_blank" rel="noopener">Book a one-off lesson</a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center mt-4 mt-lg-0">
                            <img src="./assets/images/amy-at-desk-wearing-skirt-2026.jpg"
                                 alt="Amy, qualified maths teacher, at her desk ready to teach online"
                                 class="img-fluid" width="2596" height="2928"
                                 style="border-radius: 12px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); max-width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 2. WHAT I COULD TELL YOU -->
    <section class="section bg-accent-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-4">What I could tell you</h2>
                    <p>I could give you the list, and it is a good list. I am a qualified secondary maths teacher with twelve years in the classroom. I got A*A*AA at A Level, a 2:1 from a Russell Group university, and a distinction in my teaching qualification. Every week I set homework and mark it myself, with feedback by audio, in writing or on video, and my subject knowledge means I can usually trace where an understanding gap began within a lesson or two.</p>
                    <p class="mb-0">All of that is true, and all of it matters. It tells you I know the maths and I know how to teach it. What it cannot tell you is the thing that really decides whether tutoring works for your child: whether they feel comfortable enough with me to say "I still don't understand" out loud, and to keep saying it until it clicks.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 3. THE PART A LIST LEAVES OUT -->
    <section class="section" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-4">The part a list leaves out</h2>
                    <p>Qualifications, experience and results are the starting point, not the whole picture. What sits on top of them is harder to write down: building a lesson where a child feels safe enough to think aloud, to be wrong, and to try again without bracing for a sigh.</p>
                    <p>That looks different for every student. Sometimes it is showing a child who has quietly given up on maths that it can be satisfying again, and watching that bring them back onto track for a grade 9. Sometimes it is being the steady presence in their week who keeps showing them what they are capable of until they start to believe it themselves. Often it is hearing what a child is not saying in the way they answer a question, and following a wobble in Year 11 back to something that never quite landed in Year 8, which is the kind of gap an exam result rarely points to on its own. And sometimes it is simply making the lesson feel less like a chore.</p>
                    <p class="mb-0">None of that shows up on a CV. It shows up in a lesson.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 4. WHAT THE FIRST LESSON INVOLVES -->
    <section class="section bg-accent-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <h2 class="mb-4">What the first lesson involves</h2>
                    <p>We start on time, on the same shared online whiteboard we would use every week. Your child works through some maths with me while I get a feel for where they are, what they find hard, and how they prefer to be taught. I explain things exactly as I would in a normal lesson, because that is the point of it: your child gets to see for themselves what my teaching is actually like.</p>
                    <p class="mb-0">Afterwards, you and your child decide together. If it is a good fit, we talk about a regular slot or a block. If it is not, I will tell you, and I will try to point you towards something that would suit them better. The one-off lesson is charged at the normal single-lesson rate for your child's level, and nothing is owed beyond it. Every price is on the <a href="/tutoring-and-prices">tutoring and prices</a> page.</p>
                </div>
                <div class="col-lg-5">
                    <img src="./assets/images/pencil-lesson-crop.png" class="img-fluid photo-frame"
                         alt="A student's personalised maths workings on a shared interactive whiteboard"
                         width="995" height="752" loading="lazy">
                    <p class="text-center photo-caption">Lessons run on Pencil Spaces, a shared interactive whiteboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 5. IN THE WORDS OF PARENTS
         Card-free editorial testimonials, same treatment as the homepage. -->
    <section class="section" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-4">In the words of parents</h2>
                    <p class="mb-5">A first lesson is usually where these start.</p>

                    <div class="testimonial-block">
                        <p class="result-headline">Progressing faster than we thought possible</p>
                        <p class="exam-boards-line">GCSE Maths</p>
                        <p class="testimonial-quote">"Amy has developed a real friendship with our daughter, enabling her to be open about her difficulties with maths concepts, and this has meant she has progressed quicker than we thought was possible."</p>
                        <p class="testimonial-attribution">Nancy, GCSE parent</p>
                    </div>

                    <hr class="testimonial-rule">

                    <div class="testimonial-block">
                        <p class="result-headline">Not just the content, the confidence too</p>
                        <p class="testimonial-quote">"I cannot thank you enough for your help with maths. It made such a huge difference, not just with the content but with my confidence too."</p>
                        <p class="testimonial-attribution">A former student</p>
                    </div>

                    <hr class="testimonial-rule">

                    <div class="testimonial-block">
                        <p class="result-headline">A love of maths she never had before</p>
                        <p class="exam-boards-line">GCSE Maths</p>
                        <p class="testimonial-quote">"Amy has even helped ignite a love for maths, something our daughter never had before. We have seen fantastic progress in a very short period of time."</p>
                        <p class="testimonial-attribution">Sian, GCSE parent</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 6. CTA BANNER -->
    <section class="whatsapp-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-3">See what a lesson is like</h3>
                    <p class="mb-4" style="font-size: 1.1rem;">Message me with your child's year group and exam board, and we will find a time for a one-off lesson.</p>
                    <a href="<?php echo $waLink; ?>" class="btn btn-cta-pro" target="_blank" rel="noopener">Message me on WhatsApp</a>
                    <p class="mt-4 mb-0" style="color: var(--ink-soft); font-size: 0.95rem;">Prefer email? <a href="/contact">Send an enquiry</a> through the contact page.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
