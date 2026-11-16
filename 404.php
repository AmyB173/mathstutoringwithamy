<?php
/* ============================================================================
   PAGE NOT FOUND
   Shown by the ErrorDocument line in .htaccess whenever an address does not
   exist. Not in the sitemap and marked noindex on purpose.
   ========================================================================= */
http_response_code(404);
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
    <meta name="robots" content="noindex, follow" />
    <title>Page Not Found | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the footer icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- ================================================ THE PAGE
         One plain section, same shape as the one-off lesson page. -->
    <section class="section" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="mb-4">I can't find that page</h1>
                    <p>The address may have changed, or the link that brought you here may be out of date. Everything I offer, with prices, is on the <a href="/tutoring-and-prices">tutoring and prices</a> page, and practical questions are answered in the <a href="/faq">frequently asked questions</a>.</p>
                    <p class="mb-5">If you were looking for something in particular, message me and I will point you to it.</p>

                    <a href="/" class="btn btn-cta-pro btn-lg">Go to the homepage</a>
                    <p class="mt-4 mb-0" style="color: var(--ink-soft); font-size: 0.95rem;">Or <a href="/contact">get in touch</a> through the contact page.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
