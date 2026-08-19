<?php
/* ============================================================================
   ALL TUTORING AND PRICES
   The one page that lists every service and what it costs. Sits at the top of
   the Tutoring dropdown, so it is the map of everything else.

   AMY: prices live in $prices below, nothing else. Change a number there and it
   updates the fee row, the "from" lines and the structured data together, so
   there is no second place to forget.

   AMY: two things on this page have no landing page of their own yet, so their
   "find out more" links point at /contact: the GCSE group and KS3 one to one.
   When you build either page, swap the link in $services.

   AMY: the Study Club is deliberately not listed. It is not in the navbar and
   has no price on its own page, so I have left it out rather than invent a fee.
   If it is still running, add a row for it in the small groups list.
   ========================================================================= */
$prices = [
    'ks3_group'    => 35,
    'gcse_group'   => 40,
    'alevel_group' => 50,
    'ks3_solo'     => 65,
    'gcse_solo'    => 75,
    'alevel_solo'  => 85,
    'recovery'     => 747,
];

$waLink = 'https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27d%20like%20to%20ask%20about%20tutoring%20and%20prices';
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
        content="Every kind of maths tutoring I offer and what it costs, in small groups and one to one, across Key Stage 3, GCSE and A Level. Every price is on the page." />
    <title>All Tutoring and Prices | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/png" href="/assets/images/favicon-petrol-48.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/tutoring-and-prices" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/tutoring-and-prices">
    <meta property="og:title" content="All Tutoring and Prices | Maths Tutoring With Amy">
    <meta property="og:description" content="Every kind of maths tutoring I offer and what it costs, from Key Stage 3 through to A Level, in small groups and one to one.">
    <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-at-desk-wearing-skirt-2026.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the footer icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Online maths tutoring",
      "serviceType": "Maths tutoring",
      "url": "https://www.mathstutoringwithamy.co.uk/tutoring-and-prices",
      "areaServed": "GB",
      "provider": {
        "@type": "EducationalOrganization",
        "name": "Maths Tutoring With Amy",
        "sameAs": "https://www.mathstutoringwithamy.co.uk"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Maths tutoring and prices",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Key Stage 3 small group maths tutoring",
            "price": "<?php echo $prices['ks3_group']; ?>",
            "priceCurrency": "GBP",
            "url": "https://www.mathstutoringwithamy.co.uk/year-7-accelerator"
          },
          {
            "@type": "Offer",
            "name": "GCSE small group maths tutoring",
            "price": "<?php echo $prices['gcse_group']; ?>",
            "priceCurrency": "GBP"
          },
          {
            "@type": "Offer",
            "name": "A Level small group maths tutoring",
            "price": "<?php echo $prices['alevel_group']; ?>",
            "priceCurrency": "GBP",
            "url": "https://www.mathstutoringwithamy.co.uk/year-12-a-level-group"
          },
          {
            "@type": "Offer",
            "name": "Key Stage 3 one to one maths tutoring",
            "price": "<?php echo $prices['ks3_solo']; ?>",
            "priceCurrency": "GBP"
          },
          {
            "@type": "Offer",
            "name": "GCSE one to one maths tutoring",
            "price": "<?php echo $prices['gcse_solo']; ?>",
            "priceCurrency": "GBP",
            "url": "https://www.mathstutoringwithamy.co.uk/GCSE"
          },
          {
            "@type": "Offer",
            "name": "A Level one to one maths tutoring",
            "price": "<?php echo $prices['alevel_solo']; ?>",
            "priceCurrency": "GBP",
            "url": "https://www.mathstutoringwithamy.co.uk/a-level"
          },
          {
            "@type": "Offer",
            "name": "Year 12 A Level Recovery programme",
            "price": "<?php echo $prices['recovery']; ?>",
            "priceCurrency": "GBP",
            "url": "https://www.mathstutoringwithamy.co.uk/recovery"
          }
        ]
      }
    }
    </script>
</head>

<body class="prices-page">
    <?php $navTheme = 'light'; /* this page's hero is ink, so the bar stays white */ include 'navbar.php'; ?>

    <!-- ================================================ 1. HERO
         Ink panel with white type, same treatment as the Year 7 and Year 12
         group pages. Title and one subheading, nothing else: someone landing
         here wants the numbers, and they are one scroll away. -->
    <section class="hero-section hero-section-study-hub">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h1 class="hero-title">All tutoring and prices</h1>
                    <p class="hero-subtitle mb-0">Below is a list of all the tutoring options there are available this year. All lessons are taught by me or one of my highly qualified team of tutors.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 2. SMALL GROUPS -->
    <section id="small-groups" class="section bg-accent-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-3">Small group tutoring</h2>
                    <p class="mb-4">A standard lesson is 55 minutes, taught live online on a shared interactive whiteboard. Groups are capped at five students, they run in half-term blocks through England term time.</p>

                    <ul class="price-list mb-4">
                        <li>
                            <div class="price-item-main">
                                <h3>Key Stage 3 group</h3>
                                <p>The Year 7 Accelerator, for able Year 7s who are bored of repeating Year 6. New content they have not met before, taught live on Thursdays.</p>
                                <a class="price-item-link" href="/year-7-accelerator">Read about the Year 7 Accelerator</a>
                            </div>
                            <div class="price-item-fee">&pound;<?php echo $prices['ks3_group']; ?><span>per session</span></div>
                        </li>
                        <li>
                            <div class="price-item-main">
                                <h3>GCSE group</h3>
                                <p>A weekly group working through GCSE content and exam questions together. Message me for the current groups, the year they are aimed at and where there is space.</p>
                                <a class="price-item-link" href="/contact">Ask about GCSE groups</a>
                            </div>
                            <div class="price-item-fee">&pound;<?php echo $prices['gcse_group']; ?><span>per session</span></div>
                        </li>
                        <li>
                            <div class="price-item-main">
                                <h3>A Level group</h3>
                                <p>The A Level Maths Mastery Group for Year 12, Edexcel only, running September through to summer. Two to three exam questions marked personally every week.</p>
                                <a class="price-item-link" href="/year-12-a-level-group">Read about the Year 12 group</a>
                            </div>
                            <div class="price-item-fee">&pound;<?php echo $prices['alevel_group']; ?><span>per session</span></div>
                        </li>
                    </ul>

                    <p class="mb-0">Groups are billed per half term in advance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 3. ONE TO ONE -->
    <section id="one-to-one" class="section" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-3">One to one tutoring</h2>
                    <p class="mb-4">A standard lesson is 55 minutes, taught live online on a shared interactive whiteboard. Every lesson is built around your child: their exam board, their gaps, the topic they have a mock on in a fortnight. A regular weekly slot, invoiced monthly.</p>

                    <ul class="price-list mb-4">
                        <li>
                            <div class="price-item-main">
                                <h3>Key Stage 3 one to one</h3>
                                <p>Years 7 to 9, whether that is filling in gaps left over from primary, keeping up with a fast set, or getting ahead before GCSE starts.</p>
                                <a class="price-item-link" href="/contact">Ask about Key Stage 3 tutoring</a>
                            </div>
                            <div class="price-item-fee">&pound;<?php echo $prices['ks3_solo']; ?><span>per session</span></div>
                        </li>
                        <li>
                            <div class="price-item-main">
                                <h3>GCSE one to one</h3>
                                <p>GCSE and IGCSE, foundation and higher, all exam boards: AQA, Edexcel, OCR and WJEC. Whether your child is chasing a 9 or needs a 4 to get onto the course they want.</p>
                                <a class="price-item-link" href="/GCSE">Read about GCSE tutoring</a>
                            </div>
                            <div class="price-item-fee">&pound;<?php echo $prices['gcse_solo']; ?><span>per session</span></div>
                        </li>
                        <li>
                            <div class="price-item-main">
                                <h3>A Level one to one</h3>
                                <p>Year 12 and Year 13, pure and applied, with Edexcel as my specialism. We also take on students with other exam boards. Marked homework every week.</p>
                                <a class="price-item-link" href="/a-level">Read about A Level tutoring</a>
                            </div>
                            <div class="price-item-fee">&pound;<?php echo $prices['alevel_solo']; ?><span>per session</span></div>
                        </li>
                    </ul>

                    <p class="mb-0">Shorter lessons are available at the same rate pro-rata: a 30-minute lesson is half the price, a 45-minute lesson is three quarters. That suits a younger student whose concentration goes at the 40-minute mark better than stretching an hour thin.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 4. RECOVERY PROGRAMME -->
    <section class="section bg-accent-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <h2 class="mb-3">Year 12 A Level Recovery</h2>
                    <p>One fixed programme rather than an ongoing arrangement: 12 weeks for Year 12 students who are genuinely struggling, designed to get them back onto steady ground before Year 13 starts. A weekly live session plus video review and homework, so it asks for about three hours a week from your child. Start dates run from March to June.</p>
                    <p class="price-headline">&pound;<?php echo $prices['recovery']; ?> <span>for the complete 12 weeks</span></p>
                    <a class="price-item-link" href="/recovery">Read about the recovery programme</a>
                </div>
                <div class="col-lg-5">
                    <img src="./assets/images/pencil-workings.png" class="img-fluid photo-frame"
                         alt="A shared interactive whiteboard showing a student's handwritten maths workings"
                         width="1018" height="910" loading="lazy">
                    <p class="text-center photo-caption">Lessons run on Pencil Spaces, a shared digital classroom.</p>
                </div>
            </div>
        </div>
    </section>

    <?php /* AMY: the old "Paying for it" section is gone, cut to keep this page
       scannable. Cancellation, the 48 hours' notice, the refund on unused lessons
       and the equipment list all still live on /info-pack, linked below. */ ?>

    <!-- ================================================ 5. NOT SURE WHICH -->
    <section class="whatsapp-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-3">Not sure which one fits your child?</h3>
                    <p class="mb-4" style="font-size: 1.1rem;">Feel free to get in touch on WhatsApp and we can have a chat about where your child is at and what tutoring option might fit them.</p>
                    <a href="<?php echo $waLink; ?>" class="btn btn-cta-pro" target="_blank" rel="noopener">Message me on WhatsApp</a>
                    <p class="mt-4 mb-0" style="color: var(--ink-soft); font-size: 0.95rem;">Or <a href="/contact">send an enquiry</a>. Invoicing, cancellations and what your child needs to hand are all in the <a href="/info-pack">tutoring essential information</a>.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
