<?php
/* ============================================================================
   PRICES
   Every price on the site comes from this one file.

   AMY: change a number here and it updates everywhere it appears: the fee rows
   and structured data on tutoring-and-prices.php, and the price lines on the
   A Level page. There is no second place to forget.
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

/* A group block is billed per half term in advance, and half terms vary in
   length, which is where the "250 to 400" style range comes from. */
$blockMin = 5;
$blockMax = 8;
