# Maths Tutoring with Amy: Project Notes

## Brand Voice

A short reference for writing posts, captions and tutor-facing copy so everything sounds like Amy.

### In Three Words

Warm. Assured. Unvarnished.

### The Voice

- **Warm but not soft.** Friendly and personal, with steel underneath. Kind to parents without sounding eager or pleading.
- **Quietly confident.** State expertise as fact, never boast. No overselling, because there is no need to.
- **Plain-spoken, anti-jargon.** Reject brochure language. "I don't do generic lessons" over "we pride ourselves on bespoke provision." Sound like a real person, not a polished company.
- **Substance over slogans.** Reach for the concrete (a grade 4 to a grade 6, a real parent's words) rather than adjectives. Proof, not adverbs.
- **Honest to a fault.** Cut a line before letting it overstate. Accuracy and consent matter more than a slicker sentence.
- **Calm and unhurried.** No urgency, no exclamation marks, no "book now." The tone implies you are worth waiting for, not chasing customers.
- **Teacher, not salesperson.** Sound like someone who cares whether a child understands, not whether they convert.

### Rules

- **Lead with "I."** Talk to one parent, not an audience. Name the team alongside, but speak as yourself.
- **Let proof do the persuading.** Show, don't claim.
- **Cut anything a brochure would say.** If it could appear on any tutor's website, bin it.
- **No em dashes anywhere.** Never use an em dash or `&mdash;` in any copy. Rewrite the sentence instead, using a colon, a full stop, a comma, or parentheses.
- **Clear, but not too punchy.** Avoid the clipped, staccato rhythm of an advert (three short fragments in a row is the giveaway). Let sentences join up and breathe like real speech.
- **Minor, natural grammatical imperfections are fine.** They read human. What is not fine is an obvious silly error (a typo, a wrong word) that implies carelessness. Clean those every time.
- **Stay calm.** Confidence is quiet. No exclamation marks, no false urgency.

### Pre-Post Checklist

- Does it sound like me talking to one parent, or like a company describing itself?
- Have I led with "I"?
- Is there proof doing the work, not just adjectives?
- Any brochure phrases to cut?
- Any em dashes to remove?
- Is the rhythm natural, or too clipped and advert-like?
- Any silly, obvious errors to fix?
- Would this look at home next to a premium price tag?

## Design

A disciplined single-accent system: coral is for actions, everything else is ink. Tokens are defined in `assets/css/style-new.css`.

### Tokens

- `--ink: #1a1a2e` - all headings and body text. Never pure black.
- `--ink-soft: #4a4a5e` - secondary text: captions, attributions, quiet lines (trust bar, exam board lines, footer copy).
- `--accent: #ff5757` - pulled from the logo's coral "A" mark. Actions only: buttons, links, interactive elements.
- `--accent-dark: #cc4646` - darkened accent for hover states and for any accent text under 24px (passes WCAG AA on white).
- `--surface: #ffffff` - main background.
- `--surface-alt: rgba(26, 26, 46, 0.05)` - cool light grey (ink at 5%) for alternating sections, as on Meet Amy. No warm off-white anywhere.
- `--radius-control: 6px` - all buttons and inputs use this radius; never fully-rounded pills.
- `--section-pad: 96px` / `--section-pad-mobile: 64px` - section vertical padding, consistent across every section.

Legacy variable names (`--deep-purple`, `--warm-dark`, `--brand-red`, `--cta-green`, etc.) are aliased to the tokens above in `:root`, so old markup still resolves correctly, but new work should reference the named tokens directly.

### Type

- **Headings: Fraunces** (Google Fonts variable font with the optical size axis, weight 600, `--font-heading`), letter-spacing -0.01em, `font-optical-sizing: auto`. Serif is for headings only.
- **Body: Inter** (`--font-body`), 17px base, line-height 1.65, weight 400 (500-700 for emphasis and UI). Buttons are Inter 600 with no letter-spacing.
- Fonts load from Google Fonts with `font-display: swap`; the shared stylesheet also `@import`s them so every page gets the faces without markup changes. Outfit is retired: do not use it in new work.
- **The wordmark** ("Maths Tutoring with Amy" in `.logo-words`, navbar and footer) is Fraunces 600 in brand coral, matching the logo mark. This is a deliberate branding exception to "coral is for actions only"; the footer overrides it to white on the dark panel. Do not extend coral to any other non-interactive text.

### Rules

- **Coral is for actions only.** Buttons, links, and interactive elements get coral (`--accent` / `--accent-dark` on hover). Everything you read gets ink or ink-soft. Never introduce purple, green, or blue UI elements, and no coral headings or coral decoration.
- **Buttons and CTAs are sentence case, never all caps.** "Book a free trial session", not "ENQUIRE NOW".
- **Button copy says what happens.** Prefer "Enquire now" / "Download the free guide" over vague verbs.
- **One photo treatment site-wide**, the `.photo-frame` utility class: `border-radius: 8px`, `border: 1px solid #d1d5db`, `box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1)`. Modest, no dramatic drop shadows, no offset colour block behind photos. Photographs (and literal review screenshots, which are images) are the one legitimate frame on a page.
- **No cards.** Content is prose and photographs. Never wrap text in card or box containers. `.warm-card` still exists for older pages not yet converted, but do not add new card wrappers, and prefer unwrapping existing ones when you touch a page.
- **Proof hierarchy: real screenshots (Google reviews, messages) are the primary proof**, in `.photo-frame` at consistent widths. Written testimonials are secondary: ink result headline, plain roman quote text, ink-soft attribution, hairline separators, no boxes, no italic paragraphs.
- **No heavy-handed design.** No entrance animations, hover lifts or zooms, glow shadows, watermark icons, decorative quote marks, star strips, or emoji icons. Button hover is a flat colour change only.
- **Headings use the established type scale** (h1 40px / h2 34px / h3 2rem / h4 1.75rem / h5 1.375rem), with the homepage hero as the exception: 56-64px desktop, scaling down on mobile. The big white hero is deliberate; do not shrink it to match inner pages.
- **Predictable page structure.** Below the hero, pages are a rhythm of sections alternating white and `--surface-alt`, each a simple two-column row of prose and a photograph. Meet Amy is the reference for section structure (but not for the homepage hero).
- **Exam boards and levels are listed as quiet text lines**, never pill badges: e.g. "GCSE, all exam boards: AQA · Edexcel · OCR · WJEC" in `.exam-boards-line` (ink-soft, small-caps).
- **No em dashes anywhere** in any copy on this site (see Brand Voice above; this applies to code-level copy too).
- Keep visual clutter low. Avoid label pills on every section, multiple different list styles on the same page, or box wrappers where plain text will do.

### Overall principle

Simple and restrained, like a nicely edited Word document with some colour: coral for actions, ink for everything else, whitespace and type doing the design work. "Private tutor with a waiting list": restraint, whitespace, big type. Let the grade results carry the page through size and weight, not colour.

Note for a later pass: Meet Amy's two remaining `.warm-card` wrappers should be unwrapped to match (out of scope for the homepage work).