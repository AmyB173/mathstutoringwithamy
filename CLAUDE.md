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
- `--surface-alt: #faf7f4` - subtle warm off-white for alternating sections.

Legacy variable names (`--deep-purple`, `--warm-dark`, `--brand-red`, `--cta-green`, etc.) are aliased to the tokens above in `:root`, so old markup still resolves correctly, but new work should reference the named tokens directly.

### Rules

- **Coral is for actions only.** Buttons, links, and interactive elements get coral (`--accent` / `--accent-dark` on hover). Everything you read gets ink or ink-soft. Never introduce purple, green, or blue UI elements, and no coral headings or coral decoration.
- **Buttons and CTAs are sentence case, never all caps.** "Book a free trial session", not "ENQUIRE NOW".
- **Button copy says what happens.** Prefer "Enquire now" / "Download the free guide" over vague verbs.
- **One photo treatment site-wide:** `border-radius: 12px`, `border: 1px solid #e5e7eb`, `box-shadow: 0 20px 40px rgba(26, 26, 46, 0.14)`. No offset colour block behind photos.
- **One card style site-wide:** white background, subtle border or soft shadow (not both stacked as a hard offset), generous padding. `.testimonial-card`, `.blog-card`, `.calendly-card` follow this.
- **Headings use the established type scale** (h1 40px / h2 34px / h3 2rem / h4 1.75rem / h5 1.375rem), with the homepage hero as the exception: 56-64px desktop, scaling down on mobile.
- **Exam boards and levels are listed as quiet text lines**, never pill badges: e.g. "GCSE, all exam boards: AQA · Edexcel · OCR · WJEC" in `.exam-boards-line` (ink-soft, small-caps).
- **No em dashes anywhere** in any copy on this site (see Brand Voice above; this applies to code-level copy too).
- Keep visual clutter low. Avoid label pills on every section, multiple different list styles on the same page, or `warm-card` wrappers where plain text will do.

### Overall principle

"Private tutor with a waiting list": restraint, whitespace, big type. Coral means action. Let the grade results carry the page through size and weight, not colour.