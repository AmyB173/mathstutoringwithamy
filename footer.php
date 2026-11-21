<footer class="site-footer">
    <div class="container">
        <?php /* AMY: these plain links keep every page one click from anywhere
           now that the top menu is shorter. Add new pages here as they go up. */ ?>
        <nav class="footer-nav" aria-label="More pages">
            <a href="/year-7-accelerator" class="footer-link">Year 7 Accelerator</a>
            <a href="/gcse" class="footer-link">GCSE tutoring</a>
            <a href="/gcse-foundation-group" class="footer-link">GCSE Foundation group</a>
            <a href="/a-level" class="footer-link">A Level tutoring</a>
            <a href="/year-12-a-level-group" class="footer-link">Year 12 A Level group</a>
            <a href="/recovery" class="footer-link">Year 12 A Level Recovery</a>
            <a href="/tutoring-and-prices" class="footer-link">All tutoring and prices</a>
            <a href="/one-off-lesson" class="footer-link">Why start with a one-off lesson</a>
            <a href="/meet-the-tutors" class="footer-link">About us</a>
            <a href="/framework-values" class="footer-link">Our values</a>
            <a href="/faq" class="footer-link">Frequently asked questions</a>
            <a href="/blog" class="footer-link">Blog</a>
            <a href="/contact" class="footer-link">Contact</a>
        </nav>

        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="footer-brand">
                    <img src="/assets/images/logo-white-144.png" alt="Maths Tutoring with Amy" class="footer-logo" />
                    <div class="footer-brand-text">
                        <div class="logo-words">Maths Tutoring with Amy</div>
                        <p class="copyright-text">© 2026 All rights reserved</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="footer-contact-info">
                    <a href="mailto:contact@mathstutoringwithamy.co.uk" class="contact-email">contact@mathstutoringwithamy.co.uk</a>
                    <a href="/privacy" class="footer-link">Privacy Policy</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-social-links">
                    <a href="https://www.facebook.com/GCSEandALevel.MathsTutoringWithAmy" target="_blank" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/mathstutoringwithamy/" target="_blank" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@amythemathsteacher" target="_blank" class="social-link">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
  // Record WhatsApp and call-booking clicks in GA4, on every page that uses this footer
  document.querySelectorAll('a[href*="wa.me"], a[href*="calendly.com"]').forEach(function (link) {
    link.addEventListener('click', function () {
      if (typeof gtag !== 'function') return;
      var section = link.closest('section, nav, footer');
      gtag('event', link.href.indexOf('wa.me') !== -1 ? 'whatsapp_click' : 'call_booking_click', {
        link_location: section ? (section.className || section.tagName.toLowerCase()) : 'unknown',
        page_path: window.location.pathname
      });
    });
  });
</script>
