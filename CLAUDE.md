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

A disciplined single-colour system: petrol is the brand colour and the action colour, everything else is ink, ink-soft or a surface. Tokens are defined in `assets/css/style-new.css`.

Petrol carries every interactive element. Coral has been retired: it fought with petrol (near-opposite hues, both fully saturated) and there is no longer a second colour anywhere on the site. On social media, where there is nothing to click, petrol is still the emphasis colour.

### Tokens

- `--ink: #1a1a2e` - all headings and body text. Never pure black.
- `--ink-soft: #4a4a5e` - secondary text: captions, attributions, quiet lines (trust bar, exam board lines, footer copy).
- `--accent: #105a75` - deep petrol, hue 198. The single colour on the site: the brand (logo and wordmark) and every action (buttons, links, interactive elements). White text on it passes WCAG AA at 7.7:1. Deliberately low-saturation: the earlier `#0a7ea4` was 88% saturated and read tech-y once it had to carry the wordmark as well as the buttons.
- `--accent-dark: #0c4459` - darkened accent for hover states and for any accent text under 24px (10.6:1 on white).
- `--surface: #ffffff` - main background.
- `--surface-alt: #f6f5f2` - off-white for alternating sections and for the hero ground. **Barely warm**, roughly 2% toward yellow, and deliberately so: petrol, ink and white are all cool, and once the hero took this tint as well the page read cold. It is far too desaturated to fight petrol the way coral did. This reverses the earlier "no warm off-white anywhere" rule, which was written when the tint covered only a few bands. Opaque on purpose, because it is also used as light text on the dark footer.
- `--radius-control: 6px` - all buttons and inputs use this radius; never fully-rounded pills.
- `--section-pad: 96px` / `--section-pad-mobile: 64px` - section vertical padding, consistent across every section.

Legacy variable names (`--deep-purple`, `--warm-dark`, `--brand-red`, `--cta-green`, etc.) are aliased to the tokens above in `:root`, so old markup still resolves correctly, but new work should reference the named tokens directly.

### Type

- **Headings: Fraunces** (Google Fonts variable font with the optical size axis, weight 600, `--font-heading`), letter-spacing -0.01em, `font-optical-sizing: auto`. Serif is for headings only.
- **Body: Inter** (`--font-body`), 17px base, line-height 1.65, weight 400 (500-700 for emphasis and UI). Buttons are Inter 600 with no letter-spacing.
- Fonts load from Google Fonts with `font-display: swap`; the shared stylesheet also `@import`s them so every page gets the faces without markup changes. Outfit is retired: do not use it in new work.
- **The wordmark** ("Maths Tutoring with Amy" in `.logo-words`, navbar and footer) is Fraunces 600 in `--accent`, matching the petrol logo mark; the footer overrides it to white on the dark panel. It is the one non-interactive thing that carries the accent, because it is the brand.

### Rules

- **The accent is for the brand and for actions, nothing else.** The logo and wordmark carry it as identity; buttons, links and interactive elements carry it as "you can click this" (`--accent-dark` on hover). Everything you read gets ink or ink-soft. Never introduce purple, green, coral or red UI elements, and no accent headings or accent decoration.
- **Rarity is what makes the accent work.** A colour that appears once on a screen is unmissable; a colour that appears eight times is wallpaper and stops reading as a signal. Prefer one primary action per section, with secondary links in ink. If a page is filling up with accent-coloured elements, cut some rather than reaching for a second colour.
- **Tick and cross lists are the one green/red exception.** `--yes: #2f6b4f` and `--no: #a33a3a` (deep and desaturated on purpose, so they read editorial rather than clip-art) colour the glyphs in a `.check-list` and nothing else. The text beside them stays ink. Do not use these tokens for text, backgrounds, borders, headings or any other UI, and do not add a third status colour.
- **Buttons and CTAs are sentence case, never all caps.** "Book a one-off lesson", not "ENQUIRE NOW".
- **Button copy says what happens.** Prefer "Enquire now" / "Download the free guide" over vague verbs.
- **One photo treatment site-wide**, the `.photo-frame` utility class: `border-radius: 8px`, `border: 1px solid #d1d5db`, `box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1)`. Modest, no dramatic drop shadows, no offset colour block behind photos. Photographs (and literal review screenshots, which are images) are the one legitimate frame on a page.
- **No cards. This is the clearest case of the heavy-handed design this site avoids.** Content is prose and photographs; never wrap text in a card or box container. A white panel with a border, a radius and a drop shadow around a paragraph adds weight and adds nothing: it makes ordinary text look like it needs a frame to be taken seriously, which is the opposite of the confidence this site is going for. Whitespace and type do that job. Never add a new card wrapper, whatever it is called, and unwrap the ones you meet.
- **Proof hierarchy: real screenshots (Google reviews, messages) are the primary proof**, in `.photo-frame` at consistent widths. Written testimonials are secondary: ink result headline, plain roman quote text, ink-soft attribution, hairline separators, no boxes, no italic paragraphs.
- **No heavy-handed design.** No entrance animations, hover lifts or zooms, glow shadows, watermark icons, decorative quote marks, star strips, or emoji icons. Button hover is a flat colour change only.
- **Headings use the established type scale** (h1 40px / h2 34px / h3 2rem / h4 1.75rem / h5 1.375rem), with the homepage hero as the exception: 56-64px desktop, scaling down on mobile. The hero's oversized type is deliberate; do not shrink it to match inner pages. Its *scale* is the deliberate part, not its background, which is `--surface-alt` (see The navbar and the hero ground).
- **Predictable page structure.** The hero carries `--surface-alt`, then pages are a rhythm of sections alternating white and `--surface-alt`, each a simple two-column row of prose and a photograph. Where the hero runs straight into a tinted section the two merge on purpose; do not force alternation with a white band. Meet Amy is the reference for section structure (but not for the homepage hero).
- **Exam boards and levels are listed as quiet text lines**, never pill badges: e.g. "GCSE, all exam boards: AQA · Edexcel · OCR · WJEC" in `.exam-boards-line` (ink-soft, small-caps).
- **No em dashes anywhere** in any copy on this site (see Brand Voice above; this applies to code-level copy too).
- Keep visual clutter low. Avoid label pills on every section, multiple different list styles on the same page, or box wrappers where plain text will do.

### Overall principle

Simple and restrained, like a nicely edited Word document with some colour: petrol for the brand and for actions, ink for everything else, whitespace and type doing the design work. "Private tutor with a waiting list": restraint, whitespace, big type. Let the grade results carry the page through size and weight, not colour.

**Outstanding: `.warm-card` is still on the site and should come off.** It is the old card wrapper (white, 1px `#d1d5db`, 8px radius, 2rem padding, drop shadow) from before the no-cards rule. This is a real piece of work rather than a tidy-up: **32 wrappers across eight pages**, some carrying inline styles such as `border-top: 4px solid var(--deep-purple)` that need a plan of their own. [recovery.php](recovery.php) alone has 20 and is effectively a page redesign; a-level 3, GCSE 2, calculator-guide 2, meet-amy 2, contact 1, info-pack 1, success-study-club 1. Do it page by page when you are in one anyway, not as one sweep, and do not let the count tempt anyone into leaving it: the rule is no cards.

### The navbar and the hero ground

The navbar is **white**, fixed to the top of every page: hairline bottom border, the faintest shadow, petrol wordmark and mark, ink nav links, petrol Enquire button. One variant only, no per-page switching.

**The hero carries `--surface-alt`, not white.** This is what stops the top of the page floating. A pure white hero under a white bar had no anchor and read "like paper"; a faint tinted ground gives the bar something to sit against without putting a dark slab across every page. An ink navbar was tried first and rejected as domineering and heavy: it is a permanent band on screen the whole time someone reads, not a hero treatment, and it reads heavier still at phone width. Fix the ground, not the bar.

Where a tinted hero runs straight into a `--surface-alt` section (the homepage trust bar, [contact.php](contact.php), [recovery.php](recovery.php)) the two merge into one tinted region on purpose. Do not insert a white section to force alternation.

`.hero-section-study-hub` still overrides the hero to ink and is unaffected, since it is defined later in the stylesheet.

**The logo ships as two artwork files.** `logo-petrol-144.png` in the navbar, `logo-white-144.png` in the footer, `favicon-petrol-48.png` for the tab. Sized to their display size (45px at 3x), not full-resolution originals scaled down in the browser. A CSS `filter: brightness(0) invert(1)` was tried to derive white from petrol and does not work here: `brightness(0)` flattens every non-transparent pixel to black regardless of its original colour, so a two-tone mark (a disc with the letter knocked out) comes back as one solid white disc. That trick is only safe on a flat single-colour shape. Any future logo change needs both files re-exported.
