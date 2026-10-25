# Elayne Legal: status and to-do

Working notes, excluded from the release zip and source archives (see `.distignore` and `.gitattributes`).
Design source: `~/Documents/elayne-content/legal-corporate/` (private `elayne-content` repo). Time log: `~/Documents/elayne-content/WORK.md`.
Last updated: 2026-10-25. Version: 0.1.0 (unreleased). GitHub repo (`imagewize/elayne-legal`) exists; the Packagist entry is created when v1.0.0 is ready.

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
| Team | `legal-team` | Older design, not in the prototype. Keep, restyle to Legal Corporate later. |

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
- Update the prod map in `rebuild-demo-subsite.php` (already edited, not yet run on prod) and add `legal-corporate-footer` to its `template_parts`.
- The services, about and contact demo pages still use the older patterns.

## Other open work

- `screenshot.png` (1200x900).
- About, services and contact composites exist but reuse older generic patterns (`legal-about-intro`, `legal-stats`, `legal-team`, `legal-contact`) that are not restyled yet, and the prototype has no inner-page designs. Run sentinel on them and rebuild the demo pages (the rebuild script runs inside the Trellis VM; the dev map already points at the composites).
- Style variation check: Legal Blue still ships Bitter via the parent; decide whether it should use Source Serif 4.
- Header sticky and nav underline fixes are untested on the demo: sync and check scroll on the front end, with the admin bar, and on mobile.
- Mobile header: verify the overlay menu, utility bar hiding and CTA at phone width.
- Footer: link targets are `#` placeholders; wire to real pages in the demo.
- Prototype images are Unsplash and cannot ship; replace with CC0/GPL images in `patterns/images/legal/`, document them in the readme, then port photo-based sections.
- Add `readme.txt` (WP.org style) and decide whether the child is listed on WP.org or distributed only via Packagist/GitHub.
- Deprecation: after v1.0.0, a branch in Elayne removes the bundled `legal-*` patterns and variations and adds a notice.

## Known issues and limits

- Parent templates hard-code `"theme":"elayne"` on template-part blocks; the child retargets it on `render_block_data`. Re-test after every Elayne release.
- Fonts: Source Serif 4 is the latin subset only; other scripts fall back to Georgia.
- `plumbing-hero` (parent) fails editor validation (inline `margin-top:0`). Unrelated to this theme.
- Compliance check: `composer check` runs `pt-cli check` here (pt-cli ^2.6, includes the `image-height-auto` rule from #16) and passes all patterns.
- Tool gap still open: wp-cli-pattern-validate #1 (closing comment before `</div>`).
