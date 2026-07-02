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
  <meta name="description" content="Honest, practical writing about maths tutoring, A Level, GCSE, and how to help your child make real progress." />
  <title>Blog | Maths Tutoring with Amy</title>

  <link rel="icon" type="image/x-icon" href="/assets/images/logo-red.png">
  <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/blog" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/blog">
  <meta property="og:title" content="Blog | Maths Tutoring with Amy">
  <meta property="og:description" content="Honest, practical writing about maths tutoring, A Level, GCSE, and how to help your child make real progress.">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style-new.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Outfit:wght@400;600;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <!-- ================================================ HEADER -->
  <section class="section" style="background: white; padding-bottom: 2rem;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h1 class="mb-3">Blog</h1>
          <p style="font-size: 1.125rem; color: #555; margin-bottom: 0;">Honest, practical writing about A Level and GCSE Maths, revision habits, and how to help your child make real progress.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ POST LISTING -->
  <section class="section" style="background: rgba(201, 178, 248, 0.06);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">

          <?php
          include 'blog/posts.php';
          $published = array_filter($posts, fn($p) => $p['published']);
          usort($published, fn($a, $b) => strcmp($b['date'], $a['date']));

          foreach ($published as $post):
            $date = date('j F Y', strtotime($post['date']));
            $url  = '/blog/' . $post['slug'];
          ?>

          <a href="<?= htmlspecialchars($url) ?>" class="blog-card">
            <div class="row g-0">
              <div class="col-md-4">
                <?php if ($post['image']): ?>
                  <img src="<?= htmlspecialchars($post['image']) ?>"
                       alt="<?= htmlspecialchars($post['title']) ?>"
                       class="blog-card-image">
                <?php else: ?>
                  <div class="blog-card-placeholder">
                    <i class="fas fa-calculator"></i>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-md-8">
                <div class="blog-card-body">
                  <p class="blog-card-date"><?= htmlspecialchars($date) ?></p>
                  <h2 class="blog-card-title"><?= htmlspecialchars($post['title']) ?></h2>
                  <p class="blog-card-excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
                  <span class="blog-read-more">Read article <i class="fas fa-arrow-right fa-xs"></i></span>
                </div>
              </div>
            </div>
          </a>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ CTA -->
  <section style="background: var(--deep-purple); padding: 60px 0;">
    <div class="container text-center">
      <h2 style="color: white;" class="mb-3">Questions about tutoring?</h2>
      <p style="color: rgba(255,255,255,0.8); font-size: 1.125rem;" class="mb-4">I'm happy to have a chat and see if I'm the right fit for your child.</p>
      <a href="https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27d%20like%20to%20enquire%20about%20tutoring%20for%20my%20child"
         class="btn-whatsapp-cta">
        <i class="fab fa-whatsapp fs-5"></i> Enquire on WhatsApp
      </a>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
