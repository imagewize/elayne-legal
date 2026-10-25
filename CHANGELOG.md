# Changelog

All notable changes to Elayne Legal are documented here. The format follows
[Keep a Changelog](https://keepachangelog.com/) and the project uses
[Semantic Versioning](https://semver.org/).

## [Unreleased]

### Added
- Page composites `page-legal-about`, `page-legal-services` and `page-legal-contact`: a navy page header plus the Legal Corporate sections, replacing the older per-page pattern lists.
- Button hover states from the prototype (`legal-buttons.css`): gold darkens, navy deepens, outline fills navy, and the hero outline button turns white with navy text.
- Header nav links get the gold underline on hover.

### Fixed
- Header brand (mark, site name and tagline) links to the home page.
- Header nav links showed a double underline (the current-page text underline plus the gold border); only the gold line remains.
- Header is now sticky: the template-part wrapper sticks, since the inner header was as tall as its parent and could not (offset for the admin bar).

### Changed
- About intro and team patterns restyled to Legal Corporate (eyebrow, serif headings, bordered cards); the about intro no longer has its own banner and H1, so the page header is the only one.
- Buttons match the prototype: 4px radius, `.7rem 1.25rem` padding, sentence-case Explore buttons in departments and CTA strip.
- CTA strip is now a dark gold band with a white heading and one white "Book free consultation" button with an arrow.
- Button hovers redefine the preset colour variables instead of using `!important`.
- Hero: left column text and enquiry card are top-aligned like the prototype.
- README logo is now the EOS Icons gavel (MIT) instead of the Codicons scales.

### Removed
- Bundled attorney photos (`attorney-1..3.webp`); the team cards are text-only and the demo adds portraits as media uploads.
- `hero-cover-slanted-legal` pattern (unused).

### Added
- `package.json` with `@imwz/wp-pattern-sentinel` and `validate` scripts, so patterns can be checked in the Gutenberg editor like in Elayne.
- Child theme of Elayne for law firms, extracted from the legal patterns bundled in Elayne 4.11.0.
- Legal Corporate style variation: Source Serif 4 headings, Open Sans body, compact type scale, navy and gold palette.
- Legal Blue style variation.
- Legal Corporate Header pattern: navy utility bar plus white sticky bar with monogram brand mark, navigation and consultation button.
- Legal Corporate Footer pattern and `parts/footer.html`: navy brand block, link columns and disclaimer bar.
- Legal Hero with Enquiry Form and Legal Practice Areas (filterable) patterns.
- Legal Corporate Home Page composite pattern (`page-legal-home`), starting with the enquiry hero.
- Legal Gold CTA Strip pattern.
- Legal Services Ticker pattern and `legal-ticker` block style: editable list duplicated into a scrolling track on render, paused on hover and static with reduced motion.
- Legal Departments (What We Do) pattern and `legal-departments` block style: five numbered cards with linked service lists in a 3 + 2 grid, last card in navy, arrow icon from `assets/images/icons/arrow-right.svg`. Added to `page-legal-home`.
- Legal Expertise Band pattern (navy cover block, headline and four feature points in a 2 x 2 grid) and `legal-expertise.css`, enqueued against `core/cover`. Ships as a solid colour because the prototype photo is Unsplash-licensed; add a background image to the cover for the faint texture. Added to `page-legal-home`.
- Legal Offices pattern and `legal-offices` block style: decorative map panel (`assets/images/offices-map.svg`) beside three office cards with address, phone, hours and an optional "Opening soon" badge. Added to `page-legal-home`.
- Legal Client Reviews: `legal-testimonials` restyled to the prototype's three review cards (gold stars, serif quote, role and location) in native blocks, no extra CSS.
- Practice areas: joined card grid with hover background, office chips on each card, and an office dropdown (the script swaps the native office buttons for a `<select>`; no `wp:html` block).
- Dev tooling: sentinel (browser block validation) wired to the demo `/legal/` subsite through Trellis, plus `composer lint`, `composer wpcs:scan` and `composer wpcs:fix` for PHP outside `patterns/`. Documented in CLAUDE.md.
- Legal services, about, stats, team, testimonials and contact patterns.
- `render_block_data` filter that retargets the parent's `"theme":"elayne"` template-part references so the child's `parts/header.html` renders.
- Bundled fonts: Source Serif 4, Open Sans and Mona Sans.
