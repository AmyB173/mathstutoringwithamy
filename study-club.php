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
        content="Study Club: Online tutoring for Year 13 Edexcel A Level Maths. Build confidence, overcome struggles, and succeed with weekly masterclasses, mindset sessions, and Q&A support." />
    <title>Study Club | A Level Maths Tutoring | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/x-icon" href="./assets/images/logo-red.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/study-club.php" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="./assets/css/style-new.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        !(function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) :
                    n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(
            window,
            document,
            "script",
            "https://connect.facebook.net/en_US/fbevents.js"
        );
        fbq("init", "1237029190796334");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display: none"
            src="https://www.facebook.com/tr?id=1237029190796334&ev=PageView&noscript=1" /></noscript>

    <style>
        /* Green CTA Button Styling */
        .btn-cta-green {
            background-color: var(--success-green);
            border: none;
            border-radius: 8px;
            padding: 14px 28px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            letter-spacing: -0.01em;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(168, 230, 207, 0.4);
            color: var(--warm-dark);
        }

        .btn-cta-green:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(168, 230, 207, 0.5);
            background-color: #96dcc4;
            color: var(--warm-dark);
        }

        .btn-cta-green.btn-lg {
            padding: 16px 32px;
            font-size: 18px;
        }

        /* Remove body padding */
        body {
            padding-top: 0 !important;
        }

        /* Branded header */
        .branded-header {
            background: var(--warm-white);
            padding: 1rem 0;
            text-align: center;
            border-bottom: 1px solid rgba(201, 178, 248, 0.2);
        }

        .branded-header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--warm-purple);
            margin: 0;
            letter-spacing: -0.02em;
        }

        /* Mobile sticky CTA */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: white;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.15);
            padding: 1rem;
            display: none;
        }

        @media (max-width: 768px) {
            .mobile-sticky-cta {
                display: block;
            }
            body {
                padding-bottom: 80px !important;
            }
            .branded-header h1 {
                font-size: 1.2rem;
            }
        }

        /* Scarcity alert styling */
        .scarcity-alert {
            background-color: #f0e6fc;
            border-left: 4px solid var(--warm-purple);
            padding: 1rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        /* Professional pricing card */
        .pricing-card-pro {
            background: white;
            border-radius: 8px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            border: 1px solid #e8eaf0;
            height: 100%;
            transition: all 0.3s ease;
        }

        .pricing-card-pro:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .pricing-card-pro.featured {
            border: 2px solid var(--warm-purple);
        }

        .pricing-card-pro .badge {
            background-color: var(--warm-purple);
            color: white;
            font-size: 0.85rem;
            padding: 0.4rem 0.9rem;
            border-radius: 6px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .pricing-card-pro .price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--warm-dark);
            line-height: 1;
        }

        .pricing-card-pro .price small {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--warm-dark);
        }

        /* Professional form styling */
        .signup-form-pro {
            background: white;
            border: 1px solid #e8eaf0;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .signup-form-pro .form-control {
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 0.75rem 1rem;
        }

        .signup-form-pro .form-control:focus {
            border-color: var(--warm-purple);
            box-shadow: 0 0 0 0.2rem rgba(201, 178, 248, 0.25);
        }

        /* Guarantee box styling */
        .guarantee-box-pro {
            background: #f0e6fc;
            border: 1px solid var(--warm-purple);
            border-radius: 8px;
            padding: 1rem;
            margin-top: 1.5rem;
        }

        /* Meet Amy section image */
        .amy-professional-img {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 280px;
        }

        /* WhatsApp banner styling */
        .whatsapp-banner {
            background: var(--warm-white);
            padding: 2.5rem 0;
            border-top: 1px solid rgba(93, 204, 240, 0.2);
            border-bottom: 1px solid rgba(93, 204, 240, 0.2);
        }

        .whatsapp-btn {
            background-color: #25D366;
            color: white;
            border-radius: 8px;
            padding: 14px 32px;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
            border: none;
        }

        .whatsapp-btn:hover {
            background-color: #20BA5A;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
            text-decoration: none;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "A Level Maths Study Club",
      "description": "Weekly live masterclasses and Q&A support for Year 13 Edexcel A Level Maths students",
      "provider": {
        "@type": "Organization",
        "name": "Maths Tutoring With Amy",
        "sameAs": "https://www.mathstutoringwithamy.co.uk"
      },
      "offers": {
        "@type": "Offer",
        "price": "35",
        "priceCurrency": "GBP",
        "availability": "https://schema.org/LimitedAvailability"
      }
    }
    </script>
</head>

<body>
    <!-- Branded Header -->
    <div class="branded-header">
        <div class="container">
            <h1>A Level Maths Study Club</h1>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section hero-section-study-hub">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h1 class="hero-title">Year 13 Edexcel A Level Maths Students</h1>
                            <h2 class="fs-1">Finally Get the Grade You Deserve</h2>
                            <p class="hero-subtitle mb-4">Weekly live masterclasses, personalised Q&A support, and a community of students just like you—all for less than the cost of a single 1:1 session.</p>
                            
                            <!-- Social Proof -->
                            <div class="text-center text-lg-start mb-4 text-black">
                                <div class="d-inline-flex align-items-center bg-white bg-opacity-20 rounded-pill px-4 py-2">
                                    <span class="me-2">⭐⭐⭐⭐⭐</span>
                                    <small class="fw-medium">"Through her teaching methods, I was able to succeed in the subject achieving an A* grade" - Ethan, A Level Maths Student</small>
                                </div>
                            </div>

                            <div class="text-center text-lg-start mb-3">
                                <a href="#signup" class="btn btn-cta-green btn-lg">Join the Study Club</a>
                            </div>
                            <p class="text-white"><small>Limited time to grab your early bird spot at £35/month</small></p>
                        </div>
                        <div class="col-lg-4 text-center mt-4 mt-lg-0">
                            <img src="./assets/images/amy-green-top.jpg" alt="Maths Tutor Amy" class="img-fluid" style="border-radius: 12px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); max-width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Banner -->
    <section class="py-3" style="background: linear-gradient(135deg, #f0e6fc 0%, #FFF4E6 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="mb-0 fw-bold" style="font-size: 1.05rem;">Support Twice a Week: <span style="color: var(--warm-blue);">Tuesdays 7-8pm Live Masterclass</span>, <span style="color: var(--warm-purple);">Thursday Evenings - Q&A with video feedback from Amy</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Is the Study Club Right For You? -->
    <section class="section fade-in" style="background: var(--warm-white);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h2>Is the Study Club Right For You?</h2>
                        <p class="lead mb-4">Watch this 2-minute video to see if the Study Club is the right fit for your goals</p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <div class="ratio ratio-16x9">
                                <iframe loading="lazy" src="https://www.youtube.com/embed/UpdFhlpIZYQ?si=5VVJwJw26o8XlyHo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-4">If you're feeling stuck or overwhelmed with A Level Maths, you're not alone. This Study Club is for you if:</p>
                            <ul class="fa-ul" style="font-size: 1.05rem; list-style-position: outside;">
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--success-green);"></i></span>
                                    You're in <strong>Year 13 studying Edexcel A Level Maths</strong> and need the right support to get your dream grades
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--success-green);"></i></span>
                                    You feel <strong>stuck at a grade you're not happy with</strong> and can't seem to break through to the next level
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--success-green);"></i></span>
                                    You struggle to revise effectively and the <strong>exam questions look like nothing you've seen before</strong>
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color: var(--success-green);"></i></span>
                                    You're <strong>ready to put the work in</strong> to get to the next level, but just need someone to help you get there
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Everything You Need -->
    <section class="section fade-in bg-accent-light">
        <div class="container">
            <div class="section-title">
                <h2>Everything You Need for A Level Maths Success</h2>
                <p>The Study Club combines expert teaching, mindset support, and dedicated community to give you everything you need to get your dream grade</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <img src="./assets/images/1.png" alt="Online Tutoring Icon" class="me-3" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Weekly Live Masterclass</h5>
                            <p class="mb-2">60-minute live session breaking down the most challenging A Level topics into clear, understandable concepts so you finally understand it completely</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--warm-blue);">
                                <span class="fw-bold" style="color: var(--warm-blue);">TUESDAYS 7-8PM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <img src="./assets/images/2.png" alt="Study Skills Icon" class="me-3" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <div>
                            <h5 class="fw-bold">Regular Mindset & Study Skills Support</h5>
                            <p class="mb-0">Support focused on proven exam techniques, study skills, and mindset reframing to tackle perfectionism and build true confidence</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <img src="./assets/images/3.png" alt="Q&A Icon" class="me-3" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <div class="flex-grow-1">
                            <h5 class="fw-bold">Weekly Q&A Support</h5>
                            <p class="mb-2">Post your homework or revision questions with your working, and get personalized video feedback to help you understand exactly where you went wrong</p>
                            <div class="text-center py-2 px-3" style="background: white; border-radius: 6px; border: 2px solid var(--warm-purple);">
                                <span class="fw-bold" style="color: var(--warm-purple);">THURSDAY EVENINGS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <img src="./assets/images/4.png" alt="Community Icon" class="me-3" style="width: 60px; height: 60px; flex-shrink: 0;">
                        <div>
                            <h5 class="fw-bold">Supportive Community</h5>
                            <p class="mb-0">A private community to connect with other students like you, share your struggles, and celebrate your wins</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title mt-5 pt-4">
                <h3 class="fw-bold" style="color: var(--warm-purple);">PLUS... YOU'LL ALSO GET:</h3>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 text-center">
                    <img src="./assets/images/6.png" alt="Recordings Icon" class="mb-3" style="width: 60px; height: 60px;">
                    <h5 class="fw-bold">Full Recordings Library</h5>
                    <p>Can't make a session? All masterclasses are recorded so you can catch up anytime</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <img src="./assets/images/5.png" alt="Prize Draw Icon" class="mb-3" style="width: 60px; height: 60px;">
                    <h5 class="fw-bold">Monthly Prize Draw</h5>
                    <p>Your chance to win a <strong>FREE</strong> 1:1 private tutoring session with me every month!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Amy Section -->
    <section class="section fade-in" style="background: var(--warm-white);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-center mb-4 mb-lg-0">
                            <img src="./assets/images/amy-crossed-arms.jpg" alt="Amy, A Level Maths Teacher" class="img-fluid amy-professional-img">
                            <div class="mt-3">
                                <p class="mb-1"><strong>Amy</strong></p>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Qualified Teacher • 11+ Years Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <h2 class="mb-4">Why Trust Me With Your A Level Maths?</h2>
<ul class="list-unstyled mb-4">
    <li class="mb-2">✅ <strong>11+ years</strong> teaching A Level Maths</li>
    <li class="mb-2">✅ <strong>Clear and supportive style</strong> - there will be no judgement from me, only support and the belief you can get the grade you deserve</li>
    <li class="mb-2">✅ <strong>100+ students</strong> achieved their dream grade under my guidance</li>
    <li class="mb-2">✅ <strong>Edexcel exam board specialist</strong> - I know exactly what examiners want</li>
    <li class="mb-2">✅ <strong>Qualified Teacher</strong></li>
</ul>
<p>I've seen countless brilliant students struggle to get the grades they deserve because they didn't have the right support. That's why I created the Study Club.</p>
<p class="mb-0"><strong>I believe every student can excel at maths when they have the right environment, support, and proven techniques.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="section fade-in" style="background: var(--warm-white);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h2>Invest in Yourself & Your Future</h2>
                        <p>Secure your spot at an unbeatable price before 31st December</p>
                    </div>


                    <!-- Scarcity Alert -->
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-8">
                            <div class="scarcity-alert text-center">
                                <p class="fw-bold mb-1" style="color: var(--warm-purple);">Early Bird Offer Ends 31st December 2024</p>
                                <p class="mb-0">Lock in £35/month before the price increases to £47</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-stretch g-4 mb-4">
                        <div class="col-lg-5 col-md-6">
                            <div class="pricing-card-pro featured">
                                <div class="badge">Early Bird Offer</div>
                                <p class="mb-3">Available until 31st December 2024</p>
                                <p class="price">£35<small>/month</small></p>
                                <a href="#signup" class="btn btn-cta-green btn-lg mt-4 mb-4">Join Now & Secure My Spot</a>
                                                            <!-- Add urgency countdown -->
        <div class="alert alert-warning mt-3 mb-3">
            <div class="fw-bold">⏰ Founding Member Price Ends In:</div>
            <div id="countdown" class="fs-4 fw-bold mt-2"></div>
        </div>

                                <ul class="list-unstyled text-start ps-3 mt-4">
                                    <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--success-green);"></i> Weekly Live Masterclasses</li>
                                    <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--success-green);"></i> Weekly Mindset & Technique Sessions</li>
                                    <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--success-green);"></i> Personalized Video Q&A Support</li>
                                    <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--success-green);"></i> Full Recordings Library</li>
                                    <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--success-green);"></i> Private Student Community</li>
                                    <li class="mb-2"><i class="fas fa-check me-2" style="color: var(--success-green);"></i> Monthly 1:1 Tutoring Prize Draw</li>
                                </ul>

                                <!-- Confidence Guarantee -->
                                <div class="guarantee-box-pro text-center">
                                    <p class="fw-bold mb-1" style="color: var(--warm-purple);">100% Confidence Guarantee</p>
                                    <p class="small mb-0">Attend your first live masterclass. If you don't feel more confident about the topic, email me within 24 hours for a full refund—no questions asked.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-card-pro">
                                <p class="fw-bold fs-5 mb-1">Standard Membership</p>
                                <p class="text-muted small mb-3">The price from 1st January 2026</p>
                                <p class="price" style="color: #999;">£47<small>/month</small></p>
                                <p class="mt-4 mb-4 text-muted">Includes all the same features as the Early Bird Membership</p>
                            </div>
                        </div>
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
                    <h3 class="mb-3" style="color: var(--warm-dark);">Still Got Questions?</h3>
                    <p class="mb-4" style="font-size: 1.1rem; color: var(--warm-dark);">I'm here to help! Message me directly on WhatsApp and I'll answer any questions you have about the Study Club.</p>
                    <a href="https://wa.me/447470932888" target="_blank" class="whatsapp-btn">
                        <i class="fab fa-whatsapp" style="font-size: 1.5rem;"></i>
                        Message Me on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="section fade-in" style="background: var(--warm-cream);">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="faq-item">
                        <h5 class="faq-question">What if I can't make a live session? <span class="arrow">▼</span></h5>
                        <div class="faq-answer">
                            <p>All live masterclasses are recorded and uploaded to the platform within 24 hours. You can catch up whenever it suits you and ask any questions through our Q&A support or in the next live session.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Is this better than 1:1 private tutoring? <span class="arrow">▼</span></h5>
                        <div class="faq-answer">
                            <p>The Study Club offers many of the same benefits as 1:1 tutoring, such as expert guidance and personalised help, but at a more affordable price. Plus, you get the added bonus of a supportive community of fellow students who are on the same journey as you. If you feel you need more focused, one-on-one support, you can always contact me to discuss my 1:1 and small group tutoring options.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Can I cancel anytime? <span class="arrow">▼</span></h5>
                        <div class="faq-answer">
                            <p>Yes! Cancel anytime with no penalties or hidden fees. Your early bird price of £35/month is locked in as long as you remain a member, but you can leave whenever you need to. We only want students who love being part of the club.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h5 class="faq-question">Is the early bird price really limited? <span class="arrow">▼</span></h5>
                        <div class="faq-answer">
                            <p>Yes, absolutely. The early bird price of £35/month is a special reward for early adopters. After 31st December, the price will increase to the standard £47/month.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sign-Up Section -->
    <section id="signup" class="section fade-in" style="background: var(--warm-white);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h2>Join the Study Club Now</h2>
                        <p class="lead">Fill out the details below to secure your early bird spot</p>
                    </div>

                    <div class="signup-form-pro">
                        <form action="./studyclub/process-details.php" method="POST" id="signup-form">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="student_first_name" class="form-label fw-bold">First Name <span style="color: var(--warm-purple);">*</span></label>
                                    <input type="text" class="form-control" id="student_first_name" name="student_first_name" required placeholder="Enter first name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="student_last_name" class="form-label fw-bold">Last Name <span style="color: var(--warm-purple);">*</span></label>
                                    <input type="text" class="form-control" id="student_last_name" name="student_last_name" required placeholder="Enter last name">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="student_email" class="form-label fw-bold">Your Email Address <span style="color: var(--warm-purple);">*</span></label>
                                <input type="email" class="form-control" id="student_email" name="student_email" required placeholder="your.email@example.com">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-cta-green btn-lg w-100 mb-3">
                                    Secure My Spot Now
                                </button>
                                <p class="small text-muted mb-0">Secure payment via Stripe • Cancel anytime</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Sticky CTA -->
    <div class="mobile-sticky-cta">
        <a href="#signup" class="btn btn-cta-green w-100 btn-lg">Join Now - £35/month</a>
    </div>

    <!-- Footer -->
    <footer style="background: var(--warm-dark); color: var(--warm-cream); padding: 2rem 0; text-align: center;">
        <div class="container">
            <p class="mb-0">&copy; 2024 Maths Tutoring With Amy. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Enhanced hero title size for desktop */
        @media (min-width: 992px) {
            .hero-title {
                font-size: 3.5rem !important;
            }
        }
    </style>

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

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (navbar && window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 252, 247, 0.95)';
            } else if (navbar) {
                navbar.style.backgroundColor = 'var(--warm-white)';
            }
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

        // Form submission tracking
        document.getElementById('signup-form').addEventListener('submit', function() {
            // Facebook Pixel conversion tracking
            if (typeof fbq !== 'undefined') {
                fbq('track', 'InitiateCheckout');
            }
            
            // Google Analytics conversion tracking
            if (typeof gtag !== 'undefined') {
                gtag('event', 'begin_checkout', {
                    'event_category': 'Study Club',
                    'event_label': 'Founding Member Signup'
                });
            }
        });

        // Countdown Timer
const countdownDate = new Date("Jan 1, 2026 00:00:00").getTime();
const countdownTimer = setInterval(function() {
    const now = new Date().getTime();
    const distance = countdownDate - now;
    
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    
    const countdownEl = document.getElementById("countdown");
    if (countdownEl) {
        if (distance > 0) {
            countdownEl.innerHTML = days + "d " + hours + "h " + minutes + "m";
        } else {
            countdownEl.innerHTML = "OFFER ENDED";
            clearInterval(countdownTimer);
        }
    }
}, 1000);
    </script>

</body>

</html>