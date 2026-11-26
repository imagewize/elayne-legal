/**
 * Elayne Legal browser check against the local demo (`/legal/` subsite).
 *
 * Usage (playwright comes with the sentinel dependency; module resolution
 * follows the script path, so NODE_PATH is required):
 *
 *   NODE_PATH=$PWD/node_modules node tests/browser-check.js
 *
 * Expects the local-only admin from tools/scripts/sentinel-local-admin.sh
 * demo.imagewize.com (password in ~/.config/wp-sentinel/demo.imagewize.com-local.pass).
 * Demo is http only: http://demo.imagewize.test/legal/
 *
 * Checks: front end of home/about/services/contact (header, hero, ticker
 * track, practice-areas filter script, footer, no console/page errors),
 * theme asset requests all 200, Site Editor canvas loads with 0 invalid
 * blocks, both style variations listed in the style book.
 */
const fs = require('fs');
const path = require('path');
const { chromium } = require('playwright');

const BASE = process.env.DEMO_BASE || 'http://demo.imagewize.test';
const SUBSITE = process.env.DEMO_SUBSITE || 'legal';
const PASS_FILE = path.join(process.env.HOME, '.config/wp-sentinel/demo.imagewize.com-local.pass');

async function frontEndCheck(page, label) {
  const res = await page.goto(`${BASE}/${SUBSITE}/`, { waitUntil: 'domcontentloaded', timeout: 60000 });
  await page.waitForTimeout(1500);
  const r = {
    label,
    status: res.status(),
    header: await page.locator('.legal-corporate-header').count(),
    hero: await page.locator('.is-style-legal-corporate-hero').count(),
    tickerTrack: await page.locator('.legal-ticker__track').count(),
    tickerUls: await page.locator('.legal-ticker__track ul').count(),
    practiceAreas: await page.locator('.is-style-legal-practice-areas').count(),
    filterScript: await page.locator('script[src*="legal-practice-filter.js"]').count(),
    footer: await page.locator('.legal-corporate-footer').count(),
    unavailableParts: await page.locator('text=/unavailable/i').count(),
    h1Font: await page.locator('h1').first().evaluate((el) => getComputedStyle(el).fontFamily).catch(() => 'n/a'),
  };
  await page.screenshot({ path: `/tmp/elayne-legal-${label}.png` });
  return r;
}

async function main() {
  const browser = await chromium.launch({ headless: true });
  const page = await (await browser.newContext({ viewport: { width: 1440, height: 900 } })).newPage();
  const consoleErrs = [];
  const pageErrors = [];
  const notFound = [];
  const assetStatuses = new Map();
  page.on('console', (m) => { if (m.type() === 'error') consoleErrs.push(m.text().slice(0, 160)); });
  page.on('pageerror', (e) => pageErrors.push(String(e)));
  page.on('response', (r) => {
    if (r.status() === 404) notFound.push(r.url());
    if (r.url().includes(`/app/themes/elayne-legal/assets/`)) assetStatuses.set(r.url().split('?')[0], r.status());
  });

  const report = { home: await frontEndCheck(page, 'home'), pages: {} };
  for (const slug of ['about', 'services', 'contact']) {
    const res = await page.goto(`${BASE}/${SUBSITE}/${slug}/`, { waitUntil: 'domcontentloaded', timeout: 60000 });
    await page.waitForTimeout(1200);
    report.pages[slug] = {
      status: res.status(),
      header: await page.locator('.legal-corporate-header').count(),
      footer: await page.locator('.legal-corporate-footer').count(),
    };
  }

  // Site Editor
  const pass = fs.readFileSync(PASS_FILE, 'utf8').trim();
  await page.goto(`${BASE}/${SUBSITE}/wp-admin/site-editor.php`, { waitUntil: 'domcontentloaded', timeout: 90000 });
  if (page.url().includes('wp-login')) {
    await page.fill('#user_login', 'admin');
    await page.fill('#user_pass', pass);
    await page.click('#wp-submit');
    await page.waitForURL('**/wp-admin/**', { timeout: 60000 });
    await page.goto(`${BASE}/${SUBSITE}/wp-admin/site-editor.php`, { waitUntil: 'domcontentloaded', timeout: 90000 });
  }
  await page.waitForTimeout(9000);
  let invalidBlocks = 0;
  for (const f of page.frames()) {
    invalidBlocks += await f.locator('.block-editor-warning:has-text("invalid"), .block-editor-warning:has-text("unexpected")').count().catch(() => 0);
  }
  await page.locator('button:has-text("Styles")').first().click().catch(() => {});
  await page.waitForTimeout(2500);
  await page.locator('button:has-text("Browse styles")').first().click().catch(() => {});
  await page.waitForTimeout(3000);
  const variationLabels = await page.locator('[aria-label]').evaluateAll(
    (els) => els.map((e) => e.getAttribute('aria-label')).filter((l) => l && /legal/i.test(l))
  ).catch(() => []);
  report.siteEditor = { canvasIframe: await page.locator('iframe[name="editor-canvas"]').count(), invalidBlocks, variationLabels };

  report.themeAssets = [...assetStatuses.entries()].map(([u, s]) => `${s} ${u.split('/assets/')[1]}`);
  report.notFound = notFound;
  report.consoleErrors = consoleErrs;
  report.pageErrors = pageErrors;

  console.log(JSON.stringify(report, null, 2));
  await browser.close();
}

main().catch((e) => { console.error('FATAL', e); process.exit(1); });
