# Elayne Legal: status and to-do

Working notes, excluded from the release zip and source archives (see `.distignore` and `.gitattributes`).
Design source: `~/Documents/elayne-content/legal-corporate/` (private `elayne-content` repo). Time log: `~/Documents/elayne-content/WORK.md`.
Last updated: 2026-10-25 (header fixes, inner-page composites, team and about restyle, demo portraits). Version: 0.1.0 (unreleased). GitHub repo (`imagewize/elayne-legal`) exists; the Packagist entry is created when v1.0.0 is ready.

## Prototype sections vs. child theme

| Prototype section | Pattern in child | State |
|---|---|---|
| Utility bar + site header | `legal-corporate-header` | Done. Matches design; passes Pass 1/2/3 and loads in the Site Editor. |
| Hero with enquiry form + stats | `legal-hero-form` | Done. First section of `page-legal-home` and of the demo `/legal/` home. |
| Services ticker | `legal-ticker` | Done. Editable list, duplicated into a scrolling track by a `render_block` filter; `legal-ticker` block style. |
| Practice areas (tabs + location filter) | `legal-practice-areas` | Done, with `assets/js/legal-practice-filter.js`. |
| What we do (departments) | `legal-departments` | Done. Five cards, 3 + 2 grid, `legal-departments` block style; in `page-legal-home`. `legal-services` is the older card grid. |
| Expertise band (navy, feature list) | `legal-expertise-band` | Done as a solid navy cover block (no photo: the prototype's `band.jpg` is Unsplash, so it cannot ship). Demo can add the photo as a media upload. |
| Offices | `legal-offices` | Done. Map panel (SVG asset) plus three office cards; in `page-legal-home`. `legal-contact` is a separate contact block. |
| Reviews | `legal-testimonials` | Done. Three review cards (stars, serif quote, role and place), native blocks, no CSS. Passes `composer check` and sentinel. |
| Gold CTA strip | `legal-cta-strip` | Done. Gold band, headline, two buttons; no extra CSS. |
| Footer | `legal-corporate-footer` | Done. Brand block, three link columns, disclaimer bar. |
| Team | `legal-team` | Restyled to Legal Corporate, text-only. The demo adds three Unsplash portraits (`elayne-content/legal-corporate/images/portrait-*.jpg`) through `rebuild-demo-subsite.php`. |

## Inner pages

The prototype only designs the home page, so the inner pages are composites of the Legal Corporate sections under a shared navy page header (eyebrow, serif H1, one line; left-aligned in the 1200px container). Each is a thin file of `wp:pattern` references plus the inline header group. All pass `composer check` and sentinel, and the demo dev pages 6-8 are rebuilt from them.

| Page | Composite | Sections after the header |
|---|---|---|
| About | `page-legal-about` | `legal-about-intro`, `legal-stats`, `legal-team`, `legal-offices`, `legal-cta-strip` |
| Services | `page-legal-services` | `legal-departments`, `legal-practice-areas`, `legal-expertise-band`, `legal-cta-strip` |
| Contact | `page-legal-contact` | `legal-contact`, `legal-offices`, `legal-cta-strip` |

`legal-about-intro` and `legal-team` are restyled (no banner or H1 of their own; team cards are text-only). `legal-stats` and `legal-contact` are restyled too (navy stats band; intro plus four detail cards). `legal-services` is the only older generic design left and is not used by a composite.

## Home page: what is left

The prototype home has 10 sections; 10 are done (header, hero with form, ticker, practice areas, departments, expertise band, offices, CTA strip, footer, plus the composite). Nothing left on the home page.

1. ~~`page-legal-home` composite~~ Done: hero, ticker, practice areas, departments, expertise band, offices, reviews, CTA strip. Add each new section to it as it lands. Demo `legal` map (dev) re-pointed to the child patterns.
2. ~~Gold CTA strip~~ Done.
3. ~~Services ticker~~ Done.
4. ~~What we do / departments, 5 items~~ Done.
5. ~~Offices, 3 items~~ Done.
6. ~~Expertise band, navy with 4 feature points~~ Done.
7. ~~Reviews restyle~~ Done.

Tick items off here and log the time in `WORK.md` as each lands.

## Hero

`legal-hero-form` is the prototype hero and is the first section of `page-legal-home`. The demo `/legal/` home (post 5) is built from the child patterns on dev. To do:
- `hero-cover-slanted-legal` was dropped (removed from the child).
- Run the prod rebuild (map already edited, not yet run on prod; needs the media uploads above) and add `legal-corporate-footer` to its `template_parts`.
- The demo services, about and contact pages are rebuilt from the page composites on dev (not yet on prod).

## Other open work

- `screenshot.png` (1200x900).
- Decide whether the older `legal-services` card grid goes or gets restyled; no composite uses it.
- Checked at desktop width: contact page and the stats band on about. Still to look at: services page, and the rest of about, at desktop and phone width.
- Style variation check: Legal Blue still ships Bitter via the parent; decide whether it should use Source Serif 4.
- Mobile header: sticky, brand and hidden utility bar/CTA verified at 390px on dev; the overlay menu itself is still to check.
- Footer: link targets are `#` placeholders; wire to real pages in the demo.
- Demo-only photos: `band.jpg` and `portrait-1..3.jpg` live in `elayne-content/legal-corporate/images/` (credits in `CREDITS.md`) and are uploaded to the dev `/legal/` media library; `rebuild-demo-subsite.php` places them (`$pattern_images`, `$pattern_portraits`) and expands `wp:pattern` references in composites. Import them into the prod media library before a prod rebuild.
- Uncommitted outside this repo: the rebuild script changes in `imagewize.com`, and the portraits, credits, manifest and `WORK.md` in `elayne-content`.
- Prototype images are Unsplash and cannot ship; replace with CC0/GPL images in `patterns/images/legal/`, document them in the readme, then port photo-based sections.
- Add `readme.txt` (WP.org style) and decide whether the child is listed on WP.org or distributed only via Packagist/GitHub.
- Deprecation: after v1.0.0, a branch in Elayne removes the bundled `legal-*` patterns and variations and adds a notice.

## Known issues and limits

- Parent templates hard-code `"theme":"elayne"` on template-part blocks; the child retargets it on `render_block_data`. Re-test after every Elayne release.
- Fonts: Source Serif 4 is the latin subset only; other scripts fall back to Georgia.
- `plumbing-hero` (parent) fails editor validation (inline `margin-top:0`). Unrelated to this theme.
- Compliance check: `composer check` runs `pt-cli check` here (pt-cli ^2.6, includes the `image-height-auto` rule from #16) and passes all patterns.
- Tool gap still open: wp-cli-pattern-validate #1 (closing comment before `</div>`).
