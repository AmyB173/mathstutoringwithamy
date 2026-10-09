<?php
/* The old "Tutoring Essential Information" page, replaced by /faq. The
   .htaccess rule catches /info-pack first; this is the fallback. */
header("HTTP/1.1 301 Moved Permanently");
header("Location: /faq");
exit();
