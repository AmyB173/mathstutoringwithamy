<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
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
    content="Quick links from Instagram | Maths Tutoring with Amy - Free A Level guide, recovery programme, and GCSE tutoring consultation booking." />
  <title>Instagram Links | Maths Tutoring With Amy</title>

  <link rel="icon" type="image/x-icon" href="./assets/images/logo-red.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

  <!-- Updated CSS -->
  <link href="./assets/css/style-new.css" rel="stylesheet" />
</head>

<body>
  <!-- Navigation -->
  <?php include 'navbar.php'; ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center hero-content">
          <div class="mb-4">
            <span class="instagram-badge">
              <i class="fa-brands fa-instagram me-1"></i>
              From Instagram
            </span>
          </div>
          <h1 class="hero-title">Quick Links for You</h1>
          <p class="hero-subtitle">
            Thanks for following along! Here are the resources and services mentioned in my posts.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Links Section -->
  <section class="section fade-in" style="background: var(--warm-white);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="row g-4">
            
            <!-- Free Guide Link -->
            <div class="col-12">
              <a href="/landing/5-critical-mistakes.html" class="link-card d-block text-decoration-none">
                <div class="link-card-icon icon-guide">
                  <i class="fa-solid fa-file-lines"></i>
                </div>
                <h3 class="h5 fw-bold mb-2 text-center">Free A Level Guide</h3>
                <p class="text-center mb-3">5 Critical Mistakes That Failing A Level Students Make</p>
                <div class="text-center">
                  <span class="link-badge">Free Download</span>
                </div>
              </a>
            </div>

            <!-- Recovery Programme Link -->
            <div class="col-12">
              <a href="./recovery.html" class="link-card d-block text-decoration-none">
                <div class="link-card-icon icon-programme">
                  <i class="fa-solid fa-chart-line"></i>
                </div>
                <h3 class="h5 fw-bold mb-2 text-center">A Level Recovery Programme</h3>
                <p class="text-center mb-3">The 12 Week A Level Recovery Programme</p>
                <div class="text-center">
                  <span class="link-badge">Intensive Support</span>
                </div>
              </a>
            </div>

            <!-- GCSE Tutoring Link -->
            <div class="col-12">
              <a href="contact.html" class="link-card d-block text-decoration-none">
                <div class="link-card-icon icon-gcse">
                  <i class="fa-solid fa-calendar-check"></i>
                </div>
                <h3 class="h5 fw-bold mb-2 text-center">GCSE Tutoring</h3>
                <p class="text-center mb-3">Looking for a GCSE tutor for your child in Year 10 or 11? Book a call here.</p>
                <div class="text-center">
                  <span class="link-badge">Free Consultation</span>
                </div>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof Section -->
  <section class="section fade-in" style="background: var(--warm-cream);">
    <div class="container">
      <div class="section-title">
        <h2>
          <i class="fa-solid fa-star text-warning me-2"></i>
          Trusted by Students & Parents
        </h2>
      </div>

      <div class="row g-4">
        <!-- Review Screenshot 1 -->
        <div class="col-md-6">
          <div class="review-screenshot-card">
            <img src="./assets/images/fb-review-sq.png" alt="Review from parent of GCSE student"
              class="img-fluid review-screenshot d-none d-lg-block" />
            <img src="./assets/images/fb-review-sq-phone.png" alt="Review from parent of GCSE student"
              class="img-fluid review-screenshot d-lg-none" />
            <div class="review-source">
              <span class="badge bg-light text-dark">
                <i class="fa-brands fa-facebook me-1"></i> Facebook Review
              </span>
            </div>
          </div>
        </div>

        <!-- Review Screenshot 2 -->
        <div class="col-md-6">
          <div class="review-screenshot-card">
            <img src="./assets/images/fb-review-jm.png" alt="Review from A-Level math student"
              class="img-fluid review-screenshot d-none d-lg-block" />
            <img src="./assets/images/fb-review-jm-phone.png" alt="Review from A-Level math student"
              class="img-fluid review-screenshot d-lg-none" />
            <div class="review-source">
              <span class="badge bg-light text-dark">
                <i class="fa-brands fa-facebook me-1"></i> Facebook Review
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
<?php include 'footer.php'; ?>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
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
      if (window.scrollY > 50) {
        navbar.style.backgroundColor = 'rgba(255, 252, 247, 0.95)';
      } else {
        navbar.style.backgroundColor = 'var(--warm-white)';
      }
    });
  </script>

</body>

</html>