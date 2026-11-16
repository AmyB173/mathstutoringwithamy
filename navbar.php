<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="/assets/images/logo-accent-144.png" width="45" height="45" alt="Maths tutoring with Amy logo" class="me-2" />
      <span class="logo-words d-none d-sm-block">Maths Tutoring with Amy</span>
    </a>

    <a href="/contact" class="btn btn-cta-pro py-2 px-3 d-lg-none" style="font-size: 0.8rem;">Enquire</a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Open the menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto me-4 align-items-center">
        <?php /* AMY: one dropdown only. Each level page links on to its own
           groups in the body of the page, and the group pages also sit in the
           footer. When the Year 6 and KS3 pages exist, add them at the top of
           this list and move the Year 7 Accelerator onto the KS3 page. */ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Tutoring</a>
          <ul class="dropdown-menu border-0 shadow-sm">
            <li><a class="dropdown-item" href="/year-7-accelerator">KS3: Year 7 Accelerator</a></li>
            <li><a class="dropdown-item" href="/gcse">GCSE</a></li>
            <li><a class="dropdown-item" href="/a-level">A Level</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/tutoring-and-prices">Prices</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/meet-amy">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/faq">FAQ</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
      </ul>
      <a href="/contact" class="btn btn-cta-pro d-none d-lg-block">Enquire now</a>
    </div>
  </div>
</nav>