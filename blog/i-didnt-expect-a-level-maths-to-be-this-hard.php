<?php
$waLink = 'https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27ve%20read%20your%20blog%20post%20about%20A%20Level%20Maths%20and%20have%20a%20question';

$faqs = [
  [
    'q' => 'Is A Level Maths much harder than GCSE?',
    'a' => '<p>For most students, yes, it’s a big step up. GCSE content is assumed knowledge from the start, the pace is much faster, and exam questions expect students to combine topics and work through longer problems without step-by-step guidance.</p>',
  ],
  [
    'q' => 'Is a grade 6 or 7 at GCSE enough for A Level Maths?',
    'a' => '<p>Many sixth forms ask for at least a 6 or 7. Students with these grades can do well, but they often feel the jump the most, and will have to do more work to catch up.</p>',
  ],
  [
    'q' => 'How should my child revise for A Level Maths?',
    'a' => '<p>Start by making sure they understand each topic using textbook questions, focusing on the harder ones. Then move on to exam-style questions for that topic, and keep coming back to earlier topics. Past papers work best once those gaps are filled, and then they can be used to diagnose what still needs revising, not as the revision itself. I’d be happy to point you towards some resources: <a href="' . htmlspecialchars($waLink) . '" target="_blank" rel="noopener">message me on WhatsApp</a>.</p>',
  ],
];

$faqSchema = array_map(fn($f) => [
  '@type' => 'Question',
  'name' => $f['q'],
  'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f['a'])],
], $faqs);

$description = 'A Level Maths is a big step up from GCSE, even for students who got a 7, 8 or 9. Here’s why it catches so many of them out, and what helps.';
?>
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
  <meta name="description" content="<?php echo htmlspecialchars($description); ?>" />
  <title>I didn’t expect A Level Maths to be this hard for my child | Maths Tutoring with Amy</title>

  <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
  <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/blog/i-didnt-expect-a-level-maths-to-be-this-hard" />
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/blog/i-didnt-expect-a-level-maths-to-be-this-hard">
  <meta property="og:title" content="I didn’t expect A Level Maths to be this hard for my child | Maths Tutoring with Amy">
  <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
  <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-red-jumper.webp">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "I didn’t expect A Level Maths to be this hard for my child",
    "description": <?php echo json_encode($description, JSON_UNESCAPED_UNICODE); ?>,
    "datePublished": "2026-11-11",
    "author": {
      "@type": "Person",
      "name": "Amy",
      "url": "https://www.mathstutoringwithamy.co.uk/meet-amy"
    },
    "publisher": {
      "@type": "EducationalOrganization",
      "name": "Maths Tutoring with Amy",
      "url": "https://www.mathstutoringwithamy.co.uk"
    },
    "url": "https://www.mathstutoringwithamy.co.uk/blog/i-didnt-expect-a-level-maths-to-be-this-hard"
  }
  </script>
  <script type="application/ld+json">
  <?php echo json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faqSchema], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

  </script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include '../navbar.php'; ?>

  <!-- ================================================ POST HEADER -->
  <section class="blog-post-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <a href="/blog" class="blog-back-link">
            <i class="fas fa-arrow-left fa-xs"></i> Blog
          </a>
          <p class="blog-post-date">11 November 2026</p>
          <h1 style="font-size: 2.25rem; line-height: 1.2; margin-bottom: 1rem;">I didn’t expect A Level Maths to be this hard for my child</h1>
          <p style="font-size: 1.125rem; color: var(--ink-soft); line-height: 1.7; margin-bottom: 0;">If your child did well at GCSE Maths and enjoyed the subject, it’s natural to expect they’d do well at A Level too.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================ POST BODY -->
  <section class="blog-post-body">
    <div class="container">
      <div class="blog-post-prose">

        <p>But if your child is in Year 12 or Year 13, you might have been quite surprised to find that A Level Maths has been really challenging for them. Perhaps now you’re even wondering whether A Level Maths was the right choice at all.</p>

        <p>In short, <strong>A Level Maths is a big step up from GCSE, even after a 7, 8 or 9</strong>. Finding it hard is common, and with the right kind of practice and a plan, <strong>most students get back on track</strong>.</p>

        <h2>Why is A Level Maths so much harder than GCSE?</h2>

        <p>If your child got between a grade 6 and a grade 9, they probably enjoyed maths and felt they were good at it. Taking A Level Maths was the natural next step.</p>

        <p>What you’re often not told is <strong>how big the jump</strong> from GCSE to A Level Maths is. It’s especially noticeable for students who got a 6 or 7, but it catches out students with higher grades too.</p>

        <ul>
          <li>Much of the GCSE content is <strong>assumed to be secure</strong>, at the highest level, from day one</li>
          <li>Even the chapters that go over GCSE topics again move so quickly that <strong>there isn’t time to learn them deeply</strong></li>
          <li>The ways of revising that worked at GCSE <strong>often don’t work at A Level</strong></li>
        </ul>

        <p>This can be really frustrating for you as a parent. You might feel you should have been warned, or that your child could have been better prepared over the summer to give them a good start. The jump is rarely talked about well, so it isn’t something you could easily have seen coming.</p>

        <h2>Signs your child is finding A Level Maths hard</h2>

        <p>If your child is feeling a bit lost with A Level Maths, you might be seeing some of these:</p>

        <ul>
          <li>They say <strong>“But the exam questions looked nothing like the textbook questions”</strong></li>
          <li>They know they need to revise, but hit <strong>a blank wall</strong> when it comes time to do it</li>
          <li>There are so many textbook questions that <strong>they don’t know where to start</strong></li>
          <li>They do their homework regularly, but <strong>it rarely gets marked</strong>, so they don’t know how to improve their answers</li>
          <li>They’re <strong>only doing past papers</strong>, and their marks aren’t moving</li>
          <li>They find lessons fine, but <strong>there often isn’t enough class time</strong> to spend on the hardest, most complex exam-style questions</li>
        </ul>

        <p>If these sound like your child, it doesn’t mean they can’t do well, but it does mean <strong>something needs to change</strong>.</p>

        <h2>How can my child improve at A Level Maths?</h2>

        <p>Something that can really help your child improve is <strong>their working practices</strong>, and the things that make the biggest difference are fairly simple. For example:</p>

        <ul>
          <li><strong>Practise the hardest questions in the textbook</strong>, not just the ones they can already do</li>
          <li>Keep <strong>a simple timetable</strong> for when homework gets done and when their own independent work gets done</li>
          <li><strong>Ask for help</strong> with what they don’t understand, whether that’s a teacher, a friend, or a tutor if they have one</li>
          <li><strong>Know when to move on</strong> from textbook questions to exam-style questions, and where to find them</li>
          <li><strong>Use two colour pens on past papers.</strong> This is my own method: one colour for the answers they got from memory, and a different colour for anything they had to look up. It shows at a glance what’s secure and what isn’t</li>
          <li><strong>When self-marking, note every question they got wrong</strong> and which chapter it came from, then go back and retry those questions</li>
        </ul>

        <h2>What a tutor can (and can’t) do</h2>

        <p>A tutor can help a lot, but <strong>they can’t do the work for your child</strong>.</p>

        <p>Your child will still need to put the hard work in between sessions. That means being curious about what they don’t know, and having the motivation to go beyond what they’ve been told to do.</p>

        <p>I’m an experienced teacher, and so is every tutor on my team, so we can quickly see what’s working for your child and what isn’t. Where I see tutoring help most is:</p>

        <ul>
          <li><strong>Keeping them motivated.</strong> Knowing someone is checking in each week, reviewing their homework and cheering them on makes a surprising difference</li>
          <li><strong>Guiding their revision</strong>, and setting homework aimed at their gaps, with specific feedback</li>
          <li><strong>Showing them when to use the textbook</strong> and when to move on to exam questions, and giving more time to the harder, exam-style ones, so exam questions stop feeling like a different subject</li>
          <li>Being <strong>someone they can ask anything</strong>, without feeling silly</li>
        </ul>

        <p>And for you as the parent, you will get <strong>the reassurance that you have someone entirely dedicated to monitoring their progress</strong> and keeping you up to date with how they’re doing and what they need to do to improve.</p>

        <h2>What changes</h2>

        <p>What I usually see, within a few weeks of tutoring starting, is that <strong>the motivation they might have lost comes back</strong> as they start to see the progress it’s possible to make once you know what to do.</p>

        <p>They should start to feel less lost, because <strong>they know they always have someone to go to</strong> with questions and for reassurance.</p>

        <p>If your child is in Year 12 and doing fine so far, the better time to act is now. The <a href="/year-12-a-level-group">Year 12 Mastery Group</a> is a small weekly Edexcel group built to stop this happening in the first place.</p>

        <h2>Got a question?</h2>

        <p>If this sounds like your child, message me on WhatsApp. I’m happy to give you a second opinion on where they are, whether or not you’re thinking about tutoring.</p>

        <p class="mt-4 mb-0">
          <a href="<?php echo htmlspecialchars($waLink); ?>" class="btn btn-cta-pro btn-lg" target="_blank" rel="noopener">Message me on WhatsApp</a>
        </p>

        <h2>Frequently asked questions</h2>

        <div class="faq-group" style="margin-top: 0;">
          <?php foreach ($faqs as $item): ?>
            <details class="faq-q">
              <summary><h3><?php echo $item['q']; ?></h3></summary>
              <?php echo $item['a']; ?>
            </details>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </section>

  <?php include '../footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
