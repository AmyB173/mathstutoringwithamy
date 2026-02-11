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
    content="Contact Maths Tutoring with Amy | Enquire about online maths tutoring for KS3, GCSE (all exam boards) and A Level (Edexcel & AQA). Build confidence and improve grades with 11+ years' teaching experience." />
  <title>Contact | Maths Tutoring With Amy</title>

  <link rel="icon" type="image/x-icon" href="./assets/images/logo-red.png">
  <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/contact.html" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="assets/css/style-new.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- jQuery for general JavaScript support -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- EmailJS SDK -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

  <!-- FACEBOOK PIXEL -->
  <script>
    !(function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod
          ? n.callMethod.apply(n, arguments)
          : n.queue.push(arguments);
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
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* WhatsApp Float Styles */
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
    }

    .whatsapp-float-button {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 60px;
      height: 60px;
      background-color: #25D366;
      color: white;
      border-radius: 50%;
      text-decoration: none;
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
      transition: transform 0.3s ease;
      font-size: 24px;
    }

    .whatsapp-float-button:hover {
      transform: scale(1.1);
      color: white;
      text-decoration: none;
    }

    /* WhatsApp Button Styles */
    .whatsapp-button {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      background-color: #25D366;
      color: white;
      padding: 16px 24px;
      text-decoration: none;
      border-radius: 25px;
      font-weight: 600;
      font-size: 18px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
      margin-bottom: 2rem;
    }

    .whatsapp-button:hover {
      background-color: #20BA5A;
      text-decoration: none;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
    }

    .whatsapp-icon {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <!-- Navigation -->
<?php include 'navbar.php'; ?>


  <!-- Contact Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h1 class="hero-title">Let's get started!</h1>
          <p class="hero-subtitle">The easiest way to get in touch is via WhatsApp - just send me a quick message about your child's situation and I'll get back to you with next steps.</p>
          
          <!-- WhatsApp Button -->
          <div class="text-center mb-4">
            <a href="https://wa.me/447470932888?text=Hi%20Amy,%20I'm%20interested%20in%20maths%20tutoring%20for%20my%20child" 
               target="_blank" 
               class="whatsapp-button">
              <span class="whatsapp-icon">💬</span>
              Message me on WhatsApp
            </a>
          </div>

          <p class="text-muted small">On a computer without WhatsApp? Email me at <a href="mailto:contact@mathstutoringwithamy.co.uk?subject=Maths Tutoring Enquiry">contact@mathstutoringwithamy.co.uk</a> or use the form below</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call Section -->
  <section class="section fade-in" style="background: var(--warm-cream);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="warm-card">
            <h3 class="mb-3">Ready for a chat?</h3>
            <p class="mb-4">If you'd prefer to talk through your child's needs over a video call, you can book a free consultation below.</p>
            
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget"
              data-url="https://calendly.com/mathstutoringwithamy/maths-call?hide_event_type_details=1&hide_gdpr_banner=1"
              style="min-width: 320px; height: 600px; border-radius: 16px; overflow: hidden;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Review Board Section -->
  <section class="section fade-in" style="background: var(--warm-white);">
    <div class="container">
      <div class="section-title">
        <h2>What parents and students say</h2>
        <p>Real reviews from families I've had the pleasure to work with</p>
      </div>

      <div class="row g-4">
        <!-- Review Screenshot 1 -->
        <div class="col-md-6">
          <div class="testimonial-card">
            <img src="./assets/images/testimonials/fb-review-sq.png" alt="Review from parent of GCSE student"
              class="img-fluid d-none d-lg-block" style="border-radius: 12px; width: 100%;" />
            <img src="./assets/images/testimonials/fb-review-sq-phone.png" alt="Review from parent of GCSE student"
              class="img-fluid d-lg-none" style="border-radius: 12px; width: 100%;" />
            <div class="mt-3">
              <span class="badge" style="background: var(--success-green); color: var(--warm-dark);">
                <i class="fab fa-facebook me-1"></i> Facebook Review
              </span>
            </div>
          </div>
        </div>

        <!-- Review Screenshot 2 -->
        <div class="col-md-6">
          <div class="testimonial-card">
            <img src="./assets/images/testimonials/fb-review-jm.png" alt="Review from A-Level math student"
              class="img-fluid d-none d-lg-block" style="border-radius: 12px; width: 100%;" />
            <img src="./assets/images/testimonials/fb-review-jm-phone.png" alt="Review from A-Level math student"
              class="img-fluid d-lg-none" style="border-radius: 12px; width: 100%;" />
            <div class="mt-3">
              <span class="badge" style="background: var(--success-green); color: var(--warm-dark);">
                <i class="fab fa-facebook me-1"></i> Facebook Review
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WhatsApp Float Button -->
  <div class="whatsapp-float">
    <a href="https://wa.me/447470932888?text=Hi%20Amy,%20I'm%20interested%20in%20maths%20tutoring%20for%20my%20child" 
       target="_blank" 
       class="whatsapp-float-button">
      💬
    </a>
  </div>

  <!-- Footer -->
<?php include 'footer.php'; ?>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="./assets/js/contact.js"></script>
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