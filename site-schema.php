<?php
/* ============================================================================
   BUSINESS DETAILS FOR SEARCH ENGINES AND AI
   The structured data on every page reads who we are from this one file, so
   the business, Amy and the tutors are described identically everywhere.

   AMY: this is not a page and nothing here is visible to visitors. If a fact
   changes (your name, a qualification, a tutor joining or leaving, a new
   social profile), change it here and every page follows.
   ========================================================================= */

$siteUrl = 'https://www.mathstutoringwithamy.co.uk';

/* AMY: your full name as you want search engines and AI to know you. */
$amyName = 'Amy Bergstrom';

$orgId = $siteUrl . '/#organization';
$amyId = $siteUrl . '/meet-amy#amy';

/* Short references. Pages that only need to point at the business or at Amy
   (a course provider, a blog author) use these. */
$schemaOrgRef = [
    '@type' => 'EducationalOrganization',
    '@id'   => $orgId,
    'name'  => 'Maths Tutoring with Amy',
    'url'   => $siteUrl,
];

$schemaAmyRef = [
    '@type'    => 'Person',
    '@id'      => $amyId,
    'name'     => $amyName,
    'jobTitle' => 'Lead Tutor',
    'url'      => $siteUrl . '/meet-amy',
];

/* Amy in full: used on the About page and as the founder on the homepage. */
$schemaAmy = $schemaAmyRef + [
    'givenName'   => 'Amy',
    'familyName'  => 'Bergstrom',
    'description' => "Qualified maths teacher with 12 years' experience in state and independent schools, leading a team of experienced maths tutors for Year 6, KS3, GCSE and A Level online.",
    'image'       => $siteUrl . '/assets/images/amy-white-shirt-at-desk.webp',
    'alumniOf'    => [
        '@type' => 'CollegeOrUniversity',
        'name'  => 'University of Bristol',
    ],
    'hasCredential' => [
        [
            '@type'              => 'EducationalOccupationalCredential',
            'name'               => 'Qualified Teacher Status (QTS)',
            'credentialCategory' => 'Teaching qualification',
        ],
        [
            '@type'              => 'EducationalOccupationalCredential',
            'name'               => 'PGCE with Distinction',
            'credentialCategory' => 'Postgraduate teaching qualification',
        ],
    ],
    'knowsAbout' => ['A Level Maths', 'GCSE Maths', 'Key Stage 3 Maths', 'Edexcel A Level Maths', 'Online maths tutoring'],
    'worksFor'   => $schemaOrgRef,
];

/* The business in full: used on the homepage. */
$schemaOrg = $schemaOrgRef + [
    'description' => "Online maths tutoring for Year 6, KS3, GCSE and A Level from a small team of qualified, experienced maths teachers, led by a teacher with 12 years' experience.",
    'logo'        => $siteUrl . '/assets/images/logo-accent-144.png',
    'image'       => $siteUrl . '/assets/images/amy-green-top.jpg',
    'email'       => 'contact@mathstutoringwithamy.co.uk',
    'areaServed'  => ['England', 'Wales'],
    'sameAs'      => [
        'https://share.google/n0BrQplEMUwBb3ung',
        'https://www.facebook.com/GCSEandALevel.MathsTutoringWithAmy',
        'https://www.instagram.com/mathstutoringwithamy/',
        'https://www.youtube.com/@amythemathsteacher',
    ],
    'founder'  => $schemaAmy,
    'employee' => [
        [
            '@type'       => 'Person',
            'name'        => 'Alexandra',
            'jobTitle'    => 'Maths Tutor',
            'description' => 'Qualified maths teacher and a Head of Mathematics for ten years. Teaches A Level, GCSE, KS3 and Year 6.',
        ],
        [
            '@type'       => 'Person',
            'name'        => 'Parmjit',
            'jobTitle'    => 'Maths Tutor',
            'description' => 'Qualified, experienced maths teacher. Teaches A Level and GCSE, including Further Maths.',
        ],
    ],
];
/* The founder block above already says who Amy works for; drop the loop. */
unset($schemaOrg['founder']['worksFor']);

/* Turns one of the blocks above into JSON for a page's structured data. */
function schema_json(array $data, bool $withContext = false): string
{
    if ($withContext) {
        $data = ['@context' => 'https://schema.org'] + $data;
    }
    return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
