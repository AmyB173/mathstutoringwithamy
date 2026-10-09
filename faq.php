<?php
/* ============================================================================
   FREQUENTLY ASKED QUESTIONS
   The questions parents ask: who we are and who we help, lessons, getting
   started, during tutoring, payments and cancellations, safety and trust. Replaces the old "Tutoring Essential Information" page
   (/info-pack), which now redirects here. No hero, questions grouped under
   headings, each one a native <details> dropdown. The answers are in the page
   HTML whether open or closed, so search engines and AI tools read every one;
   no JavaScript involved.

   AMY: for GEO, write each answer so it stands on its own if quoted out of
   context: name the thing (online maths tutoring, GCSE, Edexcel) rather than
   relying on "it" or "this", and put the direct answer in the first sentence.

   AMY: every question lives in $faqs below, once. The page and the Google
   FAQ structured data are both built from it, so add, edit or remove a
   question there and both stay in step. Each answer is HTML: wrap every
   paragraph in <p>, and use <ul><li> for a list. Links and tags are stripped
   out for the structured data automatically.

   AMY: no prices are written on this page on purpose. They live in prices.php
   and show on /tutoring-and-prices, which the payments answer links to.
   ========================================================================= */
$waLink = 'https://wa.me/447470932888?text=Hi%20Amy%2C%20I%27ve%20read%20your%20FAQs%20and%20have%20a%20question';

$faqs = [
    'about' => [
        'heading'   => 'About us and who we help',
        'questions' => [
            [
                'q' => 'Who will teach my child?',
                'a' => '<p>Your child is taught either by me, Amy, or by one of the fantastic tutors on my team, all of whom are thoroughly vetted. I only ever hire tutors who are experienced and qualified, and who I believe offer an outstanding quality of teaching. Whoever teaches your child, I stay your main point of contact. I always suggest starting with a <a href="/one-off-lesson">one-off lesson</a>, so you can both see whether it is the right fit before committing to anything more. Given how lovely my tutors are, I have no doubt that after one lesson you will be eager to get started, but I think it\'s so important to check.</p>',
            ],
            [
                'q' => 'Are your tutors qualified teachers?',
                'a' => '<p>I only hire experienced, UK-qualified teachers, with at least 5 years of teaching experience in UK schools or in schools following the British curriculum.</p>'
                     . '<p>I also thoroughly vet my tutors to ensure they meet the same high standards of teaching that I offer to my students.</p>',
            ],
            [
                'q' => 'Which levels and exam boards do you teach?',
                'a' => '<p>Maths Tutoring with Amy covers Year 6, Key Stage 3, GCSE, IGCSE and A Level. We cover all exam boards, including Edexcel, AQA, OCR, WJEC and Cambridge.</p>',
            ],
            [
                'q' => 'Who is your tutoring best for, and who isn\'t it for?',
                'a' => '<p>Tutoring can work for most children, and often leads to an unexpected boost in their focus and motivation. We can help students who are struggling with confidence issues (and these can be students struggling to pass or those aiming for an A* - confidence issues can affect any student), those needing help with structure and motivation, and those who just want that extra bit of teaching that is different from, or supplementary to, what they\'re doing at school.</p>'
                     . '<p>One of the core values here at Maths Tutoring with Amy is honesty, so I\'ll be upfront: for some students, tutoring does not work. Certain students, especially older students, will not put in the work between sessions to make sure they are making the most of it. We will try our best to motivate and help them, but ultimately, sometimes, the student themselves has to decide they want to work for it. If I\'m finding this with your child, I will tell you.</p>',
            ],
            [
                'q' => 'Do you teach A Level Further Maths?',
                'a' => '<p>Yes, we have tutors on the team who offer A Level Further Maths tutoring.</p>',
            ],
            [
                'q' => 'Can you support a child with dyslexia or other SEN?',
                'a' => '<p>Yes, we can work with a range of children with different needs.</p>'
                     . '<p>My tutors and I have a wealth of experience working with many types of students.</p>'
                     . '<p>Every kind of special educational need is so unique, and two children with the same diagnosis can often need very different approaches. That is why we pride ourselves on really getting to know each child and planning the lessons to suit their own personal style of learning.</p>',
            ],
            [
                'q' => 'Do you teach families outside the UK?',
                'a' => '<p>Yes, we have many families from all over the world receiving tutoring from us. As long as your child is studying the British curriculum, we can offer expert guidance for them.</p>'
                     . '<p>Given time zone differences, we can usually offer international students much more flexibility too. UK evenings are often fully booked from the start of the year, but the time difference means we can usually find a slot to offer you.</p>'
                     . '<p>Payment can be made online in GBP with your card, just like any other purchase.</p>',
            ],
            [
                'q' => 'Can a UK tutor help if my child is at an international school?',
                'a' => '<p>Yes, absolutely, if your child is studying at a British international school. We have an in-depth knowledge of the British maths curriculum, so we are in an excellent position to help you.</p>',
            ],
        ],
    ],
    'lessons' => [
        'heading'   => 'Lessons',
        'questions' => [
            [
                'q' => 'How long is a lesson?',
                'a' => '<p>Lessons are 55 minutes long, for one to one and small group tutoring at every level. For one to one lessons, a shorter length can be agreed when you book: 30 minutes is half the price and 45 minutes is three quarters. That can suit a younger student who loses concentration before the end of a full lesson.</p>',
            ],
            [
                'q' => 'Where do lessons take place?',
                'a' => '<p>All lessons are online, over a live video call, so your child learns from home. I teach on Pencil Spaces, a shared interactive whiteboard rather than a plain video call, so I see your child\'s working as they write it and can catch a mistake the moment it happens. It also means I can evaluate their working style and suggest improvements in real time. Their notes and homework stay saved on their own board and can be returned to at any time for revision. My associate tutors use the same or a similar set-up. I will make the process clear to you before your first lesson.</p>',
            ],
            [
                'q' => 'Do you teach in person?',
                'a' => '<p>I only teach online now. When I was an in-person teacher, I used to worry that online teaching lacked something. But after tutoring online for 4 years, I have found that I have developed the most fantastic relationships with my tutees. It also means there is no travel time for them, they can be comfortable, have a hot drink with them and make the most of every minute of the lesson.</p>'
                     . '<p>Because we have a live interactive whiteboard, the feedback is as quick as it would be in person.</p>',
            ],
            [
                'q' => 'Is online tutoring as good as face to face?',
                'a' => '<p>Yes, every bit as good. It also means you can access the very best tutors, no matter where they are located.</p>'
                     . '<p>A non-negotiable for us is the live interactive whiteboard. Students write on screen live, so they receive immediate feedback, just like they would in in-person tutoring.</p>'
                     . '<p>One parent said: "Amy is very good at building relationships with her tutees, even when the tutoring sessions are held online - she has developed a real friendship with our daughter."</p>',
            ],
            [
                'q' => 'Is there homework?',
                'a' => '<p>Yes, homework is set every week, at every level. Most of the progress your child makes happens outside our tutoring sessions, with our guidance and oversight. To make sure the methods taught during sessions are remembered and stored in long-term memory, your child will need to revisit them. They will get personal feedback by video, audio message, in writing or at the start of the next lesson, depending on what works best for your child.</p>'
                     . '<p>If your child is struggling to motivate themselves, one of the biggest benefits of tutoring is that we help motivate them to revise between sessions, and keep them accountable by checking in on this every week.</p>',
            ],
            [
                'q' => 'Will my child get enough attention in a group?',
                'a' => '<p>Small group tutoring works really well for many students. It still gives them a very personal level of service, as they will be writing on screen and I can review their work live during the lesson, but it also means they benefit from the momentum of other students too. Questions, worries and concerns voiced during a lesson often reassure and help other students who are struggling with the same or similar issues.</p>'
                     . '<p>If your child is at school in a large class, and often feels they are the only one struggling, coming to tutoring and realising that others are experiencing exactly the same thing is a truly supportive and enlightening experience that often drastically increases motivation.</p>',
            ],
            [
                'q' => 'Is one lesson a week enough?',
                'a' => '<p>Most students benefit from one weekly lesson, with homework in between. However, some students who need intensive catch-up, or who are studying independently, may need further tutoring to make sure all gaps are filled.</p>',
            ],
        ],
    ],
    'getting-started' => [
        'heading'   => 'Getting started',
        'questions' => [
            [
                'q' => 'How do we get started?',
                'a' => '<p>Message me on WhatsApp or <a href="/contact">send an enquiry</a> with your child\'s year group and exam board. Or you can email me at <a href="mailto:contact@mathstutoringwithamy.co.uk">contact@mathstutoringwithamy.co.uk</a>.</p>'
                     . '<p>You can then choose either a free 15-minute call with me, to talk about where your child is and what they need, or go straight to a one-off lesson to see how your child finds it before committing. Before the first lesson, you fill in a short student information form. Your child also creates a free account on their tutor\'s platform if one is needed.</p>',
            ],
            [
                'q' => 'Can we try a lesson before committing?',
                'a' => '<p>Yes, I always recommend booking a one-off lesson to see how your child feels and how good the student-tutor fit is.</p>'
                     . '<p>It also means your child can get a feel for what online tutoring is really like, and whether they get on with our style.</p>'
                     . '<p>We have never had anyone not sign up for tutoring after a one-off lesson. I think this is because we really value creating a warm and welcoming space for our tutoring, so that it\'s something your child looks forward to and feels invested in.</p>'
                     . '<p>Even so, I only want parents who are completely happy and confident in our tutoring services, so I find great value in booking a one-off lesson first so we can discuss how it went.</p>',
            ],
            [
                'q' => 'What does my child need for lessons?',
                'a' => '<p>As all lessons are interactive, your child will need a way to write on screen. Your child will need either:</p>'
                     . '<ul><li>A laptop or computer with a drawing tablet plugged in (this can be bought for as little as &pound;30)</li><li>A tablet with a pen</li></ul>'
                     . '<p>They should also have paper, a pen and a calculator.</p>',
            ],
            [
                'q' => 'Does the camera need to be on?',
                'a' => '<p>Yes, cameras are on in lessons, one to one and in groups. Seeing each other helps build the relationship that makes lessons work. If your child finds that hard because of anxiety, tell me and we can usually find a way round it.</p>',
            ],
            [
                'q' => 'How soon will we see a difference?',
                'a' => '<p>Every child responds differently to tutoring, but we usually find that even within the first week or so of having a tutor, motivation increases. Parents often tell us their child feels more confident in lessons and is determined to make improvements.</p>'
                     . '<p>The reason for this is often that we, as tutors, can really show your child what is possible. And they know they have someone else in their corner, rooting for them and helping them.</p>',
            ],
            [
                'q' => 'Can you guarantee my child\'s grade?',
                'a' => '<p>No. And anyone who claims to offer guarantees should, in my opinion, be avoided.</p>'
                     . '<p>We do our very best to help your child achieve their goals, whatever they are. And many, many of our students reach or even exceed the goals they had when they came to us.</p>'
                     . '<p>Whilst some tutors and tutoring companies are selective about who they take on, so that they can claim hundreds of A*s in their results, we take on any child, no matter how far they have to go, and we will be honest with you about the realistic chances of success. That means that sometimes students who have struggled with motivation, or haven\'t worked hard enough, don\'t reach their goal grade.</p>',
            ],
        ],
    ],
    'during-tutoring' => [
        'heading'   => 'During tutoring',
        'questions' => [
            [
                'q' => 'Can my child ask questions between lessons?',
                'a' => '<p>Yes! With your permission, I will set up a WhatsApp group with me, your child\'s tutor (if it isn\'t me), you and your child.</p>'
                     . '<p>This is a space where they can ask questions between lessons. If it\'s a short question, we\'ll usually reply in the chat to offer some help. If it\'s a longer question, we will plan it into our next lesson together.</p>'
                     . '<p>I really encourage students to use the WhatsApp chat to help their tutor know what they are struggling with.</p>'
                     . '<p>They can also share wins with us (we love a mid-week message to let us know a test went well, or that they answered something in class for the first time, or that they finally felt they could do their homework independently!!)</p>',
            ],
            [
                'q' => 'How will I know how my child is getting on?',
                'a' => '<p>We will keep in regular contact with you so you know how your child is getting on. You can always message me if you have any specific questions, or to share something you think we need to know as it happens.</p>',
            ],
            [
                'q' => 'Will you help with school homework?',
                'a' => '<p>We can, but I often find this isn\'t the best use of tutoring time. Sometimes we can review one difficult question together, but we generally don\'t plan whole lessons around homework.</p>'
                     . '<p>Homework is there to help the school understand how your child is doing, and your child will get valuable feedback from school because of this.</p>',
            ],
            [
                'q' => 'Do lessons run in the school holidays?',
                'a' => '<p>School holiday tutoring is completely optional, and I will ask you about this each time a school holiday comes around.</p>',
            ],
            [
                'q' => 'What happens if the tutor has to cancel?',
                'a' => '<p>If the tutor has to cancel for any reason, we will either try to rearrange if possible, refund you for the lesson or roll it over to the next month.</p>',
            ],
            [
                'q' => 'What if there\'s a technical problem in a lesson?',
                'a' => '<p>If the technical problem is on our end, we will do our very best to resolve it quickly during the lesson. If we can\'t, we will either try to rearrange the lesson or refund you for it.</p>'
                     . '<p>If the technical problem is on your end, we will do our best to help you solve it so we can continue.</p>',
            ],
        ],
    ],
    'payments' => [
        'heading'   => 'Payments and cancellations',
        'questions' => [
            [
                'q' => 'How much do lessons cost?',
                'a' => '<p>The price depends on your child\'s level and on whether they have one to one or small group tutoring, and small groups cost less per session. Every price for the 2026-2027 academic year is on the <a href="/tutoring-and-prices">tutoring and prices</a> page. Prices stay the same for the whole academic year.</p>',
            ],
            [
                'q' => 'How does invoicing work?',
                'a' => '<p>The one-off lesson is invoiced and paid for on its own. For regular one to one lessons, I send an invoice between the 23rd and the 1st of each month for the following month\'s lessons. It arrives by email with a secure Stripe payment link and is due before your child\'s second lesson. Small group tutoring is invoiced for the whole half-term block before it starts, and payment is due before the first session. If your child joins a group partway through a block, you only pay for the sessions left. Whoever teaches your child, your invoices and payments are always with me.</p>',
            ],
            [
                'q' => 'What if we need to cancel a one to one lesson?',
                'a' => '<p>You can cancel up to two term-time one to one lessons each academic year at no charge, as long as you give at least a week\'s notice each time. With less than a week\'s notice, or once you have used both, the lesson is charged. It can usually still be rearranged if your child\'s tutor has space. If not, your child gets extra work or a video lesson instead. School holiday tutoring is optional, and any cancellations for these don\'t count towards the two.</p>',
            ],
            [
                'q' => 'What if my child misses a group session?',
                'a' => '<p>Group sessions go ahead even if your child can\'t make it, and a missed session is not rescheduled, credited or refunded. But don\'t worry, the session is recorded so your child can catch up, and only they get access to the recording, for a limited time. Their homework is still set and marked with personal feedback, so they don\'t fall behind.</p>',
            ],
            [
                'q' => 'What if we decide to stop?',
                'a' => '<p>For one to one tutoring, give me at least a week\'s notice. Any lessons you have paid for beyond that week are refunded promptly, with no exit fees. For small group tutoring, let me know at least a week before the next block starts. Your child finishes the block they are in, and you won\'t be invoiced for the next one. Group blocks already paid for are not refunded, because your child\'s place is held for the whole block. If I ever have to close a group, I refund the unused part of the block.</p>',
            ],
        ],
    ],
    'safety' => [
        'heading'   => 'Safety and trust',
        'questions' => [
            [
                'q' => 'Are you and your tutors DBS checked?',
                'a' => '<p>Yes, all tutors are DBS checked.</p>',
            ],
            [
                'q' => 'Do I need to be at home during lessons?',
                'a' => '<p>If your child is 16 or under, then yes, someone will need to be at home. If your child wants to work in their bedroom, that\'s fine, but we ask that you keep the door open so you\'re within calling distance.</p>',
            ],
            [
                'q' => 'Are one to one lessons recorded, and what happens to my child\'s data?',
                'a' => '<p>Lessons may sometimes be recorded. If we do record a lesson, we keep the recording securely on a system with two-factor authentication, to keep your child\'s data secure.</p>'
                     . '<p>If your child is in a group lesson and someone is missing, the lesson will be recorded and shared with the missing student for 7 days. After 7 days, the student will no longer have access.</p>',
            ],
            [
                'q' => 'Are you insured?',
                'a' => '<p>Yes, my tutors and I are fully insured.</p>',
            ],
            [
                'q' => 'What if I\'m not happy with the tutoring?',
                'a' => '<p>If you ever have any concerns about the tutoring, please come and have a chat with me straight away. We pride ourselves on offering an excellent service, and if there was anything wrong, we\'d want to discuss with you why that is and what we can do about it.</p>',
            ],
        ],
    ],
];

$faqSchema = [];
foreach ($faqs as $group) {
    foreach ($group['questions'] as $item) {
        // Space after each paragraph and list item so they do not run together once the tags are stripped.
        $text = strip_tags(preg_replace('#</(p|li)>#', '$0 ', $item['a']));
        $faqSchema[] = [
            '@type'          => 'Question',
            'name'           => html_entity_decode($item['q'], ENT_QUOTES, 'UTF-8'),
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => trim(html_entity_decode($text, ENT_QUOTES, 'UTF-8')),
            ],
        ];
    }
}
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
        content="Answers to the questions parents ask about online maths tutoring with Amy: who teaches your child, levels and exam boards, lesson length, homework, getting started, invoicing, cancellations and safety." />
    <title>Frequently Asked Questions | Maths Tutoring With Amy</title>

    <link rel="icon" type="image/png" href="/assets/images/favicon-accent-48.png">
    <link rel="canonical" href="https://www.mathstutoringwithamy.co.uk/faq" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mathstutoringwithamy.co.uk/faq">
    <meta property="og:title" content="Frequently Asked Questions | Maths Tutoring With Amy">
    <meta property="og:description" content="Who teaches your child, levels and exam boards, lesson length, homework, getting started, invoicing, cancellations and safety.">
    <meta property="og:image" content="https://www.mathstutoringwithamy.co.uk/assets/images/amy-at-desk-wearing-skirt-2026.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/style-new.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/style-new.css'); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- FontAwesome in the head so the footer icons do not flash in -->
    <script src="https://kit.fontawesome.com/9f7f10393d.js" crossorigin="anonymous"></script>

    <script type="application/ld+json">
    <?php echo json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faqSchema], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

    </script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- ================================================ THE PAGE
         One plain section, no hero: a line of jump links, then each group as
         an h2 with its questions as h3s and plain prose answers. -->
    <section class="section" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="mb-3">Frequently asked questions</h1>
                    <p class="faq-jump">
                        <?php $links = [];
                        foreach ($faqs as $id => $group) {
                            $links[] = '<a href="#' . $id . '">' . $group['heading'] . '</a>';
                        }
                        echo implode(' &middot; ', $links); ?>
                    </p>

                    <?php foreach ($faqs as $id => $group): ?>
                        <div class="faq-group" id="<?php echo $id; ?>">
                            <h2><?php echo $group['heading']; ?></h2>
                            <?php foreach ($group['questions'] as $item): ?>
                                <details class="faq-q">
                                    <summary><h3><?php echo $item['q']; ?></h3></summary>
                                    <?php echo $item['a']; ?>
                                </details>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>

                    <p class="mt-5 mb-4">If your question is not here, ask me.</p>
                    <a href="<?php echo $waLink; ?>" class="btn btn-cta-pro btn-lg" target="_blank" rel="noopener">Message me on WhatsApp</a>
                    <p class="mt-4 mb-0" style="color: var(--ink-soft); font-size: 0.95rem;">Prefer email? <a href="/contact">Send an enquiry</a> through the contact page.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
