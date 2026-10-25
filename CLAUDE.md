# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

Elayne Legal is a WordPress block (FSE) **child theme** of [Elayne](https://github.com/imagewize/elayne) for law firms (`Template: elayne` in `style.css`). It has no `theme.json`, templates or build step: everything comes from the parent, plus block patterns, two template parts, two style variations, small CSS/JS assets and `functions.php`. Version 0.1.0 is unreleased; the GitHub repo and Packagist entry are created at v1.0.0.

`docs/STATUS.md` holds the prototype-vs-pattern map and the remaining to-do list (only the reviews restyle; the rest of the home page is done). Read it before starting design work. Design prototypes live in the private `~/Documents/elayne-content/legal-corporate/` repo. Update `CHANGELOG.md` (Keep a Changelog, `[Unreleased]`) when adding features.

## Commands

- `composer check` runs `pt-cli check patterns/ --theme=elayne`, the Elayne pattern compliance checker (the "Pass 1/2/3" referred to in STATUS). It needs `composer install` first (pt-cli is a dev dependency, installed to `vendor/`). STATUS notes it historically ran from the Elayne repo.
- `composer lint` (parallel-lint) and `composer wpcs:scan` / `composer wpcs:fix` (WordPress Coding Standards through phpcs/phpcbf) check the PHP outside `patterns/`, which in practice is `functions.php`. Patterns are block markup and are covered by `composer check` and sentinel instead. Run them after any `functions.php` change.
- `npm install` then `npm run setup` installs sentinel (`@imwz/wp-pattern-sentinel`) and its Chromium. Sentinel opens each pattern in the Gutenberg editor of a real WordPress site and reports block validation errors and content mismatches that the PHP validators (`composer check`, `wp pattern validate`) cannot see, such as class order and missing `has-custom-font-size`. Run it from this repo against the `/legal/` subsite of the demo (the theme is active there; the database lives in the Trellis VM), letting sentinel read the login from Trellis:

  ```bash
  npx sentinel --trellis --trellis-dir=$HOME/code/imagewize.com/trellis \
    --site=demo.imagewize.com --subsite=legal patterns/          # all patterns
  npx sentinel --trellis --trellis-dir=$HOME/code/imagewize.com/trellis \
    --site=demo.imagewize.com --subsite=legal patterns/x.php     # one pattern
  ```

  It needs `ansible-vault` and `trellis/.vault_pass`. If login fails because the `admin` user is missing, pass `--user` (and `--pass`), or create a temporary admin. Sync the working copy to the demo first so sentinel validates the current patterns (see below). The `npm run validate*` scripts run the same tool but prompt for the URL and login unless `--url`/`--user`/`--pass` or a `.env` are given. `sentinel-*.log.json` and `.sentinel-cache.json` are git-ignored.
- No test suite, linter config or JS build exists. To see changes, activate the theme in a WordPress site with Elayne installed and open the Site Editor.

## Architecture

- **Patterns** (`patterns/*.php`): the main content. Each file has a WP pattern header (`Slug: elayne/legal-*`, categories `elayne/legal`, `Block Types`, etc.) followed by serialized block markup with `esc_html_e( ..., 'elayne-legal' )` strings. Block comment JSON and the rendered HTML must stay in sync or the editor flags the block as invalid. Slugs deliberately keep the `elayne/legal-*` namespace so they replace the copies still bundled in the parent, and the child's win while both exist. Legal-only images go in `patterns/images/legal/`; shared avatars/icons are loaded from the parent. Icons are SVG files in `assets/images/icons/`, painted with a CSS mask. Photos from the Unsplash prototype cannot ship (GPL); the demo gets them as media uploads instead.
- **Template parts** (`parts/header.html`, `parts/footer.html`): thin wrappers that reference the Legal Corporate header/footer patterns. Parts the child does not ship fall back to the parent.
- **Style variations** (`styles/legal-corporate.json`, `styles/legal-blue.json`): Legal Corporate uses Source Serif 4 headings, Open Sans body and a navy/gold palette. Fonts are bundled in `assets/fonts/`.
- **`functions.php`** (namespace `ElayneLegal`):
  - Registers `core/group` block styles `legal-corporate-hero`, `legal-practice-areas`, `legal-ticker`, `legal-departments` and `legal-offices`, and loads each stylesheet from `assets/styles/block-styles/{name}.css` on demand via `wp_enqueue_block_style`. Header and footer CSS are enqueued the same way but without a registered style, because those patterns scope their own selectors (class `legal-corporate-header` / `legal-corporate-footer`). The expertise band is a `core/cover`, so its CSS is enqueued against `core/cover` (class `legal-expertise`). Every enqueue passes a file-mtime `ver` because block CSS is cached for a year under the WordPress version. Note WordPress may inline block CSS, so avoid relative `url()` in it unless the stylesheet is known to load as a file. A new section's CSS follows this pattern.
  - `render_block` hook wraps the list in a `legal-ticker` group in a duplicated scrolling track (front end only; the editor keeps a plain list).
  - `render_block` hook enqueues `assets/js/legal-practice-filter.js` only when a group with `is-style-legal-practice-areas` renders.
  - `render_block_data` hook rewrites `"theme":"elayne"` on `core/template-part` blocks to the active stylesheet. Parent templates hard-code that attribute (its checker requires it), and without the rewrite a child theme's parts render as unavailable. Re-test after each Elayne release.
- **Text domain**: everything (functions and all patterns) uses `elayne-legal`; keep it that way in new patterns.
- **Known checker gap**: `pt-cli check` passes `wp:image` blocks with `width` but no `;height:auto` in the `<img style>`, which the editor rejects (imagewize/pt-cli#16). Add `height:auto` by hand until that rule exists.

## Testing on the demo site

Do not cut a release to test a local change. Sync this working copy into the demo site (it is active on the `/legal/` subsite) with the shared wp-ops script:

```bash
SITE_ROOT=~/code/imagewize.com/demo/web/app \
  wp-ops rsync-package-to-site theme elayne-legal ~/code/elayne-legal
```

**Always pass this working copy as the explicit source argument and do not `cd` into the demo site to run it.** The script syncs with `--delete --delete-excluded`, and with the source omitted it defaults to `$PWD`, which wipes the real theme. Preview with `--dry-run` before `theme` when unsure; if the output deletes `web/wp/...` or `.env`, stop. The sync respects `.distignore`, so dev-only files do not land on the demo. Lima maps `imagewize.com/demo` into the VM, so nothing else needs copying.

Demo pages are rebuilt from patterns by `~/code/imagewize.com/demo/scripts/rebuild-demo-subsite.php` (`legal` map). It overwrites page content, so update the map to the child patterns first and use `WP_REBUILD_DRY_RUN=1`. See the Elayne `CLAUDE.md` for the full workflow.

## Release packaging

`.distignore` and `.gitattributes` exclude `docs/`, `composer.json`, README, dotfiles and dev files from the release zip and source archives. Keep new dev-only files listed in both.
