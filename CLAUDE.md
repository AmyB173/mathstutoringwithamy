# Maths Tutoring with Amy: Project Notes

## Maintenance

- **Every new page must be added to [sitemap.xml](sitemap.xml).** Give it a `<lastmod>` and a `<priority>` in line with similar existing pages. Exceptions: pages marked `noindex` (e.g. `revision-tracker.php`, `success-study-club.php`) and non-page files (e.g. `prices.php`, `navbar.php`, `footer.php`).

## Facts

Business details that copy must stay consistent with. If a page contradicts one of these, the page is wrong.

- **All lessons are 55 minutes.** Every lesson, every level, 1:1 and group. Shorter options exist (30 minutes at half price, 45 minutes at three-quarters price), but the standard length is always 55 minutes. Never describe a lesson as "an hour" or "60 minutes".

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

A disciplined one-hue system: a deep blue (`--accent`) for every action, the logo's lighter blue (`--accent-light`) for the logo and a handful of quiet echoes of it, and everything else ink, ink-soft or a surface. Tokens are defined in `assets/css/style-new.css`.

The deep blue carries every interactive element. Coral has been retired (it fought with the accent, near-opposite hues, both fully saturated), and petrol was replaced by the blues in October 2026. There is no second hue anywhere on the site. On social media, where there is nothing to click, the blues are the emphasis colour.

### Tokens

- `--ink: #1a1a2e` - all headings and body text. Never pure black.
- `--ink-soft: #4a4a5e` - secondary text: captions, attributions, quiet lines (trust bar, exam board lines, footer copy).
- `--accent: #1f5bb8` - deep blue, hue 216. The action colour: buttons (white labels, 6.5:1), links, focus rings, and the wordmark. It replaced petrol `#0a7f9c` in October 2026. A light-button version (`#7db1ff` fills with ink labels) was tried first and rejected: on white the buttons only stood apart at 2.2:1 and read as soft shapes, not the obvious next step.
- `--accent-dark: #174a96` - darkened accent for hover states and small accent text (8.5:1 on white). `--accent-hover` aliases it.
- `--accent-light: #7db1ff` - the logo mark's light blue, used for a few quiet echoes of the logo and nothing else: the 3px rule across the top of the footer, the footer social icons (and their hover fill, with an ink glyph), the 48px bar above `.quote-band`, the `.testimonial-rule` separators, `::selection`, and footer link hovers. **Never text on white** (2.2:1), never on anything clickable on a light ground (the deep blue means "click this"), never a heading, never a large fill. Adding a new use is a design decision, not a tidy-up: three or four touches per page look intentional, ten turn the site blue.
- `--surface: #ffffff` - main background.
- `--surface-alt: #e9eef5` - light grey for alternating sections and for the hero ground. **Faintly cool**, a whisper toward the blue (hue 215), not warm. It was `#e8ebee`, tinted toward petrol, until the October 2026 colour change. A warm off-white was tried twice: at the near-white `#f6f5f2` depth it did not read as alternation at all, and at a depth that did read (`#f1ede3`) the yellow cast turned sickly. So the tint is neutral-cool and earns its presence through depth instead: deep enough that the white/tinted section rhythm registers, still far too desaturated to compete with the accent the way coral did. Opaque on purpose, because it is also used as light text on the dark footer.
- `--radius-control: 6px` - all buttons and inputs use this radius; never fully-rounded pills.
- `--section-pad: 96px` / `--section-pad-mobile: 64px` - section vertical padding, consistent across every section.

Legacy variable names (`--deep-purple`, `--warm-dark`, `--brand-red`, `--cta-green`, etc.) are aliased to the tokens above in `:root`, so old markup still resolves correctly, but new work should reference the named tokens directly.

### Type

- **Headings: Fraunces** (Google Fonts variable font with the optical size axis, weight 600, `--font-heading`), letter-spacing -0.01em, `font-optical-sizing: auto`. Serif is for headings only.
- **Body: Inter** (`--font-body`), 17px base, line-height 1.65, weight 400 (500-700 for emphasis and UI). Buttons are Inter 600 with no letter-spacing.
- Fonts load from Google Fonts with `font-display: swap`; the shared stylesheet also `@import`s them so every page gets the faces without markup changes. Outfit is retired: do not use it in new work.
- **The wordmark** ("Maths Tutoring with Amy" in `.logo-words`, navbar and footer) is Fraunces 600 in `--accent`, the same hue as the light blue logo mark (the light blue itself is too pale for text); the footer overrides it to white on the dark panel. It is the one non-interactive thing that carries the accent, because it is the brand.

### Rules

- **The accent is for the brand and for actions, nothing else.** The logo and wordmark carry it as identity; buttons, links and interactive elements carry it as "you can click this" (`--accent-dark` on hover). Everything you read gets ink or ink-soft. Never introduce purple, green, coral or red UI elements, and no accent headings. The only decoration is the short, fixed list of `--accent-light` touches above.
- **Rarity is what makes the accent work.** A colour that appears once on a screen is unmissable; a colour that appears eight times is wallpaper and stops reading as a signal. Prefer one primary action per section, with secondary links in ink. If a page is filling up with accent-coloured elements, cut some rather than reaching for a second colour.
- **Tick and cross lists are the one green/red exception.** `--yes: #2f6b4f` and `--no: #a33a3a` (deep and desaturated on purpose, so they read editorial rather than clip-art) colour the glyphs in a `.check-list` and nothing else. The text beside them stays ink. Do not use these tokens for text, backgrounds, borders, headings or any other UI, and do not add a third status colour.
- **Buttons and CTAs are sentence case, never all caps.** "Book a one-off lesson", not "ENQUIRE NOW".
- **Button copy says what happens.** Prefer "Enquire now" / "Download the free guide" over vague verbs.
- **One photo treatment site-wide**, the `.photo-frame` utility class: `border-radius: 8px`, `border: 1px solid #d1d5db`, `box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1)`. Modest, no dramatic drop shadows, no offset colour block behind photos. Photographs (and literal review screenshots, which are images) are the one legitimate frame on a page.
- **No cards. This is the clearest case of the heavy-handed design this site avoids.** Content is prose and photographs; never wrap text in a card or box container. A white panel with a border, a radius and a drop shadow around a paragraph adds weight and adds nothing: it makes ordinary text look like it needs a frame to be taken seriously, which is the opposite of the confidence this site is going for. Whitespace and type do that job. Never add a new card wrapper, whatever it is called, and unwrap the ones you meet.
- **Proof hierarchy: real screenshots (Google reviews, messages) are the primary proof**, in `.photo-frame` at consistent widths. Written testimonials are secondary: ink result headline, plain roman quote text, ink-soft attribution, hairline separators, no boxes, no italic paragraphs.
- **No heavy-handed design.** No entrance animations, hover lifts or zooms, glow shadows, watermark icons, decorative quote marks, star strips, or emoji icons. Button hover is a flat colour change only.
- **Headings use the established type scale** (h1 40px / h2 34px / h3 2rem / h4 1.75rem / h5 1.375rem), with the homepage hero as the exception: 56-64px desktop, scaling down on mobile. The hero's oversized type is deliberate; do not shrink it to match inner pages. Its *scale* is the deliberate part, not its background, which is `--surface-alt` (see The navbar and the hero ground). The homepage section headings (`body.home .section h2`) are a second, smaller exception: 40px rather than 34px, at the same Fraunces 600 weight and tracking, so each section reads as its own chapter through scale alone. Weight was tried at 700 and read too heavy. This is homepage-only and must never be done with colour: headings stay `--ink`, the "no accent headings" rule holds.
- **Predictable page structure.** The hero carries `--surface-alt`, then pages are a rhythm of sections alternating white and `--surface-alt`, each a simple two-column row of prose and a photograph. Where the hero runs straight into a tinted section the two merge on purpose; do not force alternation with a white band (the homepage is the exception: its white trust bar deliberately separates the tinted hero from the tinted section below). Meet Amy is the reference for section structure (but not for the homepage hero).
- **Exam boards and levels are listed as quiet text lines**, never pill badges: e.g. "GCSE, all exam boards: AQA · Edexcel · OCR · WJEC" in `.exam-boards-line` (ink-soft, small-caps).
- **No em dashes anywhere** in any copy on this site (see Brand Voice above; this applies to code-level copy too).
- Keep visual clutter low. Avoid label pills on every section, multiple different list styles on the same page, or box wrappers where plain text will do.

### Overall principle

Simple and restrained, like a nicely edited Word document with some colour: blue for the brand and for actions, ink for everything else, whitespace and type doing the design work. "Private tutor with a waiting list": restraint, whitespace, big type. Let the grade results carry the page through size and weight, not colour.

**Outstanding: `.warm-card` is still on the site and should come off.** It is the old card wrapper (white, 1px `#d1d5db`, 8px radius, 2rem padding, drop shadow) from before the no-cards rule. This is a real piece of work rather than a tidy-up: **32 wrappers across eight pages**, some carrying inline styles such as `border-top: 4px solid var(--deep-purple)` that need a plan of their own. [recovery.php](recovery.php) alone has 20 and is effectively a page redesign; a-level 3, GCSE 2, calculator-guide 2, meet-amy 2, contact 1, info-pack 1, success-study-club 1. Do it page by page when you are in one anyway, not as one sweep, and do not let the count tempt anyone into leaving it: the rule is no cards.

### The navbar and the hero ground

The navbar is **white**, fixed to the top of every page: hairline bottom border, the faintest shadow, deep blue wordmark beside the light blue mark, ink nav links, deep blue Enquire button with a white label. One variant only, no per-page switching.

**The hero carries `--surface-alt`, not white.** This is what stops the top of the page floating. A pure white hero under a white bar had no anchor and read "like paper"; a faint tinted ground gives the bar something to sit against without putting a dark slab across every page. An ink navbar was tried first and rejected as domineering and heavy: it is a permanent band on screen the whole time someone reads, not a hero treatment, and it reads heavier still at phone width. Fix the ground, not the bar.

Where a tinted hero runs straight into a `--surface-alt` section ([contact.php](contact.php), [recovery.php](recovery.php)) the two merge into one tinted region on purpose. Do not insert a white section to force alternation. The homepage is the exception: its trust bar is white, so the hero reads as a distinct tinted band above it and the sections alternate cleanly from there.

`.hero-section-study-hub` still overrides the hero to ink and is unaffected, since it is defined later in the stylesheet.

**The logo ships as two artwork files.** `logo-accent-144.png` in the navbar, `logo-white-144.png` in the footer, `favicon-accent-48.png` for the tab. Sized to their display size (45px at 3x), not full-resolution originals scaled down in the browser. A CSS `filter: brightness(0) invert(1)` was tried to derive white from petrol and does not work here: `brightness(0)` flattens every non-transparent pixel to black regardless of its original colour, so a two-tone mark (a disc with the letter knocked out) comes back as one solid white disc. That trick is only safe on a flat single-colour shape. Any future logo change needs both files re-exported.
