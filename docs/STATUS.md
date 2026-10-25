# Elayne Legal: status and to-do

Working notes, excluded from the release zip and source archives (see `.distignore` and `.gitattributes`).
Design source: `~/Documents/elayne-content/legal-corporate/` (private `elayne-content` repo). Time log: `~/Documents/elayne-content/WORK.md`.
Last updated: 2026-10-25. Version: 0.1.0 (unreleased). GitHub repo and Packagist entry are created when v1.0.0 is ready.

## Prototype sections vs. child theme

| Prototype section | Pattern in child | State |
|---|---|---|
| Utility bar + site header | `legal-corporate-header` | Done. Matches design; passes Pass 1/2/3 and loads in the Site Editor. |
| Hero with enquiry form + stats | `legal-hero-form` | In the child. Open: make it the home page hero (see "Hero" below). |
| Services ticker | none | To do. Prototype has a scrolling services strip; Elayne has a ticker mechanism (`render_block` on a `core/group` className). Port as a child pattern. |
| Practice areas (tabs + location filter) | `legal-practice-areas` | Done, with `assets/js/legal-practice-filter.js`. |
| What we do (departments) | none | To do. `legal-services` is the older card grid, not this design. |
| Expertise band (navy, feature list) | none | To do. `legal-about-intro` and `legal-stats` are older designs; compare before reusing. |
| Offices | none | To do. `legal-contact` is a contact block, not a multi-office grid. |
| Reviews | `legal-testimonials` | Exists (older design). Compare with the prototype's review cards and restyle if needed. |
| Gold CTA strip | none | To do. |
| Footer | `legal-corporate-footer` | Done. Brand block, three link columns, disclaimer bar. |
| Team | `legal-team` | Older design, not in the prototype. Keep, restyle to Legal Corporate later. |

## Hero

`legal-hero-form` is the prototype hero and already lives in the child. The home page on the demo site still composes the older `hero-cover-slanted-legal`. To do:
- Add a composite home page pattern (`page-legal-home`, `<!-- wp:pattern -->` refs, no wrapper group) that uses `legal-hero-form` first.
- Decide whether `hero-cover-slanted-legal` stays in the child (Legal Blue variation) or is dropped.
- Update the demo rebuild script map for `/legal/` to the child patterns. The script rewrites page content, so run it only after the map is right.

## Other open work

- `screenshot.png` (1200x900).
- Page-level composite patterns (home, about, services, contact) for Legal Corporate.
- Style variation check: Legal Blue still ships Bitter via the parent; decide whether it should use Source Serif 4.
- Mobile header: verify the overlay menu, utility bar hiding and CTA at phone width.
- Footer: link targets are `#` placeholders; wire to real pages in the demo.
- Prototype images are Unsplash and cannot ship; replace with CC0/GPL images in `patterns/images/legal/`, document them in the readme, then port photo-based sections.
- Add `readme.txt` (WP.org style) and decide whether the child is listed on WP.org or distributed only via Packagist/GitHub.
- Run `composer`-based check wiring for the child (`pt-cli check` runs from the Elayne repo today).
- Deprecation: after v1.0.0, a branch in Elayne removes the bundled `legal-*` patterns and variations and adds a notice.

## Known issues and limits

- Parent templates hard-code `"theme":"elayne"` on template-part blocks; the child retargets it on `render_block_data`. Re-test after every Elayne release.
- Fonts: Source Serif 4 is the latin subset only; other scripts fall back to Georgia.
- `plumbing-hero` (parent) fails editor validation (inline `margin-top:0`). Unrelated to this theme.
- Tool gaps filed: pt-cli #16 (image `height:auto`), wp-cli-pattern-validate #1 (closing comment before `</div>`).
