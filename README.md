# Elayne Legal

Child theme of [Elayne](https://github.com/imagewize/elayne) for law firms.

- Style variations: Legal Corporate (Source Serif 4, compact scale), Legal Blue
- Patterns: two-bar header, hero with enquiry form, filterable practice areas, services, team, stats, testimonials, about, contact
- Requires the Elayne parent theme

## Install

    composer require imagewize/elayne-legal

or upload the zip with Elayne already installed, then activate **Elayne Legal**.

## Notes

- Pattern slugs stay `elayne/legal-*` and the text domain stays `elayne`, so the patterns are drop-in replacements for the ones still bundled in the parent. The child's patterns win while both exist.
- Images shared across verticals (avatars, icons) are loaded from the parent; legal-only images live in `patterns/images/legal/`.
- Prototypes for new designs live in the private `elayne-content` repo.
