# Elayne Legal: status and to-do

Working notes, excluded from the release zip and source archives (see `.distignore` and `.gitattributes`).
Design source: `~/Documents/elayne-content/legal-corporate/` (private `elayne-content` repo). Time log: `~/Documents/elayne-content/WORK.md`.
Last updated: 2026-10-25. Version: 0.1.0 (unreleased). GitHub repo and Packagist entry are created when v1.0.0 is ready.

## Prototype sections vs. child theme

| Prototype section | Pattern in child | State |
|---|---|---|
| Utility bar + site header | `legal-corporate-header` | Done. Matches design; passes Pass 1/2/3 and loads in the Site Editor. |
| Hero with enquiry form + stats | `legal-hero-form` | Done. First section of `page-legal-home` and of the demo `/legal/` home. |
| Services ticker | none | To do. Prototype has a scrolling services strip; Elayne has a ticker mechanism (`render_block` on a `core/group` className). Port as a child pattern. |
| Practice areas (tabs + location filter) | `legal-practice-areas` | Done, with `assets/js/legal-practice-filter.js`. |
| What we do (departments) | none | To do. `legal-services` is the older card grid, not this design. |
| Expertise band (navy, feature list) | none | To do. `legal-about-intro` and `legal-stats` are older designs; compare before reusing. |
| Offices | none | To do. `legal-contact` is a contact block, not a multi-office grid. |
| Reviews | `legal-testimonials` | Exists (older design). Compare with the prototype's review cards and restyle if needed. |
| Gold CTA strip | `legal-cta-strip` | Done. Gold band, headline, two buttons; no extra CSS. |
| Footer | `legal-corporate-footer` | Done. Brand block, three link columns, disclaimer bar. |
| Team | `legal-team` | Older design, not in the prototype. Keep, restyle to Legal Corporate later. |

## Home page: what is left

The prototype home has 10 sections; 6 are done (header, hero with form, practice areas, CTA strip, footer, plus the composite). Remaining: 5 pieces of work.

1. ~~`page-legal-home` composite~~ Done: hero, practice areas, reviews, CTA strip. Add each new section to it as it lands. Demo `legal` map (dev) re-pointed to the child patterns.
2. ~~Gold CTA strip~~ Done.
3. Services ticker (new, reuse Elayne's ticker mechanism).
4. What we do / departments, 5 items (new).
5. Offices, 3 items (new).
6. Expertise band, navy with 4 feature points (new).
7. Reviews: restyle `legal-testimonials` to the prototype's 3 review cards (restyle).

Tick items off here and log the time in `WORK.md` as each lands.

## Hero

`legal-hero-form` is the prototype hero and is the first section of `page-legal-home`. The demo `/legal/` home (post 5) is built from the child patterns on dev. To do:
- Decide whether `hero-cover-slanted-legal` stays in the child (Legal Blue variation) or is dropped.
- Update the prod map in `rebuild-demo-subsite.php` (already edited, not yet run on prod) and add `legal-corporate-footer` to its `template_parts`.
- The services, about and contact demo pages still use the older patterns.

## Other open work

- `screenshot.png` (1200x900).
- Page-level composite patterns (home, about, services, contact) for Legal Corporate.
- Style variation check: Legal Blue still ships Bitter via the parent; decide whether it should use Source Serif 4.
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
