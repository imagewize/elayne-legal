<p align="center">
  <picture>
    <source media="(prefers-color-scheme: dark)" srcset="assets/logos/elayne-legal-scales-dark.svg">
    <img src="assets/logos/elayne-legal-scales-light.svg" alt="Elayne Legal logo" width="128" height="128">
  </picture>
</p>

# Elayne Legal

Child theme of [Elayne](https://github.com/imagewize/elayne) for law firms.

- Style variations: Legal Corporate (Source Serif 4, compact scale), Legal Blue
- Patterns: two-bar header, hero with enquiry form, filterable practice areas, services, team, stats, testimonials, about, contact
- Requires the Elayne parent theme

## Install

    composer require imagewize/elayne-legal

or upload the zip with Elayne already installed, then activate **Elayne Legal**.

## Notes

- Pattern slugs stay `elayne/legal-*`, so the patterns are drop-in replacements for the ones still bundled in the parent. The child's patterns win while both exist. Strings use the `elayne-legal` text domain.
- Images shared across verticals (avatars, icons) are loaded from the parent; legal-only images live in `patterns/images/legal/`.
- Prototypes for new designs live in the private `elayne-content` repo.

## License

GNU GPL v3 (or later). See `LICENSE.md`.

The scales-of-justice icon in `assets/logos/` is the [Codicons](https://github.com/microsoft/vscode-codicons) `law` icon by Microsoft, obtained via [Blade Icons](https://blade-ui-kit.com/blade-icons/codicon-law) and licensed under [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/). It is recoloured (navy for light mode, white for dark mode).
