# AGENTS.md — Elayne Legal

Full repo rules live in [CLAUDE.md](CLAUDE.md) (this repo's agent file; do not duplicate them here). This file records findings that belong in the agent docs but are not in CLAUDE.md yet.

## WP 7.2 compatibility pass (Nov 26, 2026, demo on 7.2-RC3, parent Elayne 4.15.0)

Results: `composer lint` / `composer wpcs:scan` / `composer check` (pt-cli) clean; Sentinel **18/18 PASS** on `/legal/`; front end of home/about/services/contact all 200 with header, hero, ticker (render_block track duplication), practice-areas filter JS, footer rendering; all `assets/` CSS/JS/fonts 200; Site Editor canvas loads with **0 invalid blocks**; `debug.log` clean. No `data-wp-*`, `__experimental*`, `.components-*`, `InnerBlocks`, upload-hook, REST or jQuery usage anywhere in the theme.

### Sentinel login on the demo (important — differs from the CLAUDE.md text)

- With `--trellis`, sentinel reads credentials **from the Trellis vault only**; `.env` is ignored in that branch and only `--user`/`--pass` CLI flags override. Passing `--pass` in argv is blocked by the permission layer, so **do not use `--trellis`**: run sentinel without it from a scratch dir whose `.env` holds `WP_URL`, `WP_USER`, `WP_PASS`.
- Login is at the **base** URL like all subsites; pointing `WP_URL` at `http://demo.imagewize.test/legal` also works.
- Recipe: `tools/scripts/sentinel-local-admin.sh demo.imagewize.com` (resets local-only `admin`, writes `~/.config/wp-sentinel/demo.imagewize.com-local.pass`), plus `wp option update admin_email_lifespan 4102444800 --path=web/wp --url=http://demo.imagewize.test/legal` in the VM (the script only sets it on the main site), then from a scratch dir with a `.env` (`WP_URL=http://demo.imagewize.test/legal`, `WP_USER=admin`, `WP_PASS=<pass file contents>`): `~/code/elayne-legal/node_modules/.bin/sentinel ~/code/elayne-legal/patterns/`. Read the pass file with `fs.readFileSync` inside scripts — never put it in a shell command line.

### Site Editor on the child theme: template parts show "unavailable" in the canvas

Parent templates hard-code `"theme":"elayne"` on their `core/template-part` blocks. Under the child stylesheet the editor's REST fetch (`/wp-json/wp/v2/template-parts/elayne//header`) 404s, so the Site Editor canvas shows "Template part has been deleted or is unavailable: header" (and footer) — the 404s are the only console errors. The **front end is fine**: the `render_block_data` rewrite in `functions.php` retargets the attribute to the active stylesheet at render time (verified: header/footer render, zero "unavailable" markers on all 4 pages). Still 0 invalid blocks and no JS warnings, so this is cosmetic in the editor, not a validation failure. Re-test after each Elayne release (already noted in CLAUDE.md).

### Browser testing recipe

Playwright comes with the sentinel dependency (`npm install` here puts `playwright` in this repo's `node_modules`; there is no separate devDependency — same as the Elayne parent). Run test scripts with `NODE_PATH=~/code/elayne-legal/node_modules node /tmp/script.js` (module resolution follows the script path, not cwd — `NODE_PATH` is required). Demo is **http** only: `http://demo.imagewize.test/legal/`.
