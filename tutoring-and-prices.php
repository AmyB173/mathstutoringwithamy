<?php
/* ============================================================================
   ALL TUTORING AND PRICES
   The one page that lists every service and what it costs. It is "Prices" in
   the navbar, so it is the map of everything else.

   AMY: prices live in prices.php, nothing else. Change a number there and it
   updates the fee rows and structured data here, and the price lines on the
   A Level page, so there is no second place to forget.

   AMY: two things on this page have no landing page of their own yet, so their
   "find out more" links point at /contact: the GCSE group and KS3 one to one.
   When you build either page, swap the link in $services.

   AMY: the page is now a plain table (levels down the side, one to one and
   small group across), with the recovery course in a second small table. The
   old descriptions and the parent quote were cut to keep it scannable; the
   detail lives on each level's own page.

   AMY: the Study Club is deliberately not listed. It is not in the navbar and
   has no price on its own page, so I have left it out rather than invent a fee.
   If it is still running, add a row for it in the small groups list.
   ========================================================================= */
require_once 'prices.php';

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
        content="Every kind of maths tutoring I offer and what it costs, one to one and in small groups, across Key Stage 3, GCSE and A Level. Every price is on the page." />
    <title>All Tutoring and Prices | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/tutoring-and-prices" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/tutoring-and-prices">
    <meta property="og:title" content="All Tutoring and Prices | Maths Tutoring With Amy">
    <meta property="og:description" content="Every kind of maths tutoring I offer and what it costs, from Key Stage 3 through to A Level, one to one and in small groups.">
    <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-at-desk-wearing-skirt-2026.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the footer icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

    <?php require_once __DIR__ . '/site-schema.php'; ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Online maths tutoring",
      "serviceType": "Maths tutoring",
      "url": "https://www.mathstutoringwithamy.co.uk/tutoring-and-prices",
      "areaServed": "GB",
      "provider": <?php echo schema_json($schemaOrgRef); ?>,
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Maths tutoring and prices",
        "itemListElement": [
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
            "url": "https://www.mathstutoringwithamy.co.uk/gcse"
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
    <?php include 'navbar.php'; ?>

    <!-- ================================================ 1. TITLE
         Tinted like every other hero, so the white navbar has a ground to sit
         against. Title and one line, nothing else. -->
    <section class="hero-section" style="padding: 8rem 0 3.5rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="mb-3">Tutoring and prices</h1>
                    <p class="mb-0">Every lesson is 55 minutes, live online, with me or one of my team.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ 2. THE PRICE TABLE -->
    <section id="prices" class="section" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <table class="price-table">
                        <thead>
                            <tr>
                                <th scope="col"><span class="visually-hidden">Level</span></th>
                                <th scope="col">One to one</th>
                                <th scope="col">Small group</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Key Stage 3</th>
                                <td>&pound;<?php echo $prices['ks3_solo']; ?></td>
                                <td>&pound;<?php echo $prices['ks3_group']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">GCSE</th>
                                <td>&pound;<?php echo $prices['gcse_solo']; ?></td>
                                <td>&pound;<?php echo $prices['gcse_group']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">A Level</th>
                                <td>&pound;<?php echo $prices['alevel_solo']; ?></td>
                                <td>&pound;<?php echo $prices['alevel_group']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Year 12 A Level Recovery</th>
                                <td colspan="2">&pound;<?php echo $prices['recovery']; ?> for the complete 12 weeks, starting March to June</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="price-table-note mb-2">Prices are per session. One to one is invoiced monthly. Groups have a maximum of five students and are billed per half term in advance. Shorter lessons are available: 30 minutes is half price and 45 minutes is three quarters.</p>
                    <p class="price-table-note mb-0">Find out more: <a href="/gcse">GCSE</a> · <a href="/a-level">A Level</a> · <a href="/year-7-accelerator">Year 7 Accelerator</a> · <a href="/year-12-a-level-group">Year 12 Mastery Group</a> · <a href="/recovery">Recovery course</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================ A PARENT'S WORDS -->
    <section class="section section-alt">
        <div class="container">
            <figure class="quote-band">
                <blockquote>"Amy has developed a real friendship with our daughter, allowing her to be open about her difficulties and progress quicker than we thought possible."</blockquote>
                <figcaption class="testimonial-attribution">Nancy, GCSE Parent, Grade 4 to Grade 6</figcaption>
            </figure>
        </div>
    </section>

    <!-- ================================================ 4. NOT SURE WHICH -->
    <section class="whatsapp-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-3">Not sure which one fits your child?</h3>
                    <p class="mb-4" style="font-size: 1.1rem;">Message me on WhatsApp and we can have a chat about where your child is at.</p>
                    <a href="<?php echo $waLink; ?>" class="btn btn-cta-pro" target="_blank" rel="noopener">Message me on WhatsApp</a>
                    <p class="mt-4 mb-0" style="color: var(--ink-soft); font-size: 0.95rem;">Or <a href="/contact">send an enquiry</a>. Invoicing, cancellations and equipment are in the <a href="/faq">frequently asked questions</a>.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
