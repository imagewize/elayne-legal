=== Elayne Legal ===
Contributors: Rhand
Tags: block-patterns, full-site-editing, custom-colors, editor-style, law-firm, legal, translation-ready, wide-blocks
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 8.0
Stable tag: 1.0.0
License: GNU General Public License v3.0 (or later)
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A child theme of Elayne for law firms, attorneys and notaries: a navy and gold design with serif headings, a hero with enquiry form and a filterable practice-areas section.

== Description ==

Elayne Legal turns the Elayne block theme into a ready-made website for a law firm. It adds the Legal Corporate design (navy and gold, Source Serif 4 headings, Open Sans body text) as a style variation, together with the patterns to build a complete site from the Site Editor: no page builder and no build step.

**Elayne must be installed.** This is a child theme: layouts, templates and the design system come from the parent, and Elayne Legal adds the legal-specific patterns and styles on top.

= What you get =

* **Two-bar header** - a utility bar with phone and email above a sticky main bar with the logo, menu and call-to-action button
* **Hero with enquiry form** - headline, short pitch, a consultation request form and a row of key figures
* **Services ticker** - an editable list of services that scrolls as a marquee
* **Filterable practice areas** - tabs and a location filter, built with native blocks and a small script that loads only when the section is on the page
* **Departments** - "What we do" cards for your main areas of law
* **Expertise band** - a navy band with four feature points, and an optional background photo
* **Offices** - a map panel and cards for each office
* **Client reviews, team profiles, stats and contact details**
* **Gold call-to-action strip** and a **three-column footer** with a disclaimer bar
* **Ready-to-insert pages** - Home, About, Services and Contact assembled from the sections above, each under a shared navy page header

= Style variations =

* **Legal Corporate** - navy and gold, Source Serif 4 headings and Open Sans body text, with a compact type scale
* **Legal Blue** - a professional navy blue and gold palette

Switch between them in **Appearance → Editor → Styles**.

= Good to know =

* All patterns use native WordPress blocks and can be edited freely in the editor
* Pattern slugs stay in the `elayne/legal-*` namespace, so these patterns replace the copies still bundled in the Elayne parent theme
* Fonts are bundled with the theme, so no requests go to external font services
* Translation ready (text domain `elayne-legal`)

= Images and credits =

The theme ships no stock photography. The patterns use solid colour blocks and SVG icons, so you add your own photos. The gavel logo is the EOS Icons `gavel` icon by SUSE, licensed under MIT, recoloured for light and dark mode.

== Installation ==

1. Install and activate the Elayne parent theme first.
2. Go to Appearance > Themes > Add New > Upload Theme, choose the Elayne Legal .zip file and click Install Now. Or run `composer require imagewize/elayne-legal`.
3. Activate **Elayne Legal**.
4. Open Appearance > Editor > Styles and pick **Legal Corporate** or **Legal Blue**.
5. Add a page and insert one of the Legal page patterns (Home, About, Services or Contact), then edit the text and contact details.

== Frequently Asked Questions ==

= Does it work without Elayne? =

No. Elayne Legal is a child theme and needs Elayne installed. WordPress asks you to install the parent when it is missing.

= Can I change the colours and fonts? =

Yes. Everything is editable under Appearance > Editor > Styles, and the patterns use the theme's colour and font presets.

= Does the enquiry form send email? =

The hero embeds a Contact Form 7 form (form ID 1, editable in the shortcode block) when that plugin is active. Without it, styled placeholder fields are shown. You can also swap in another form plugin's shortcode or block.

= Can I use the patterns with another Elayne style variation? =

Yes, though the sections are designed for Legal Corporate and look best with it.

== Changelog ==

= 1.0.0 =
* First release: Legal Corporate and Legal Blue style variations, two-bar header, hero with enquiry form, services ticker, filterable practice areas, departments, expertise band, offices, reviews, team, stats, contact, CTA strip, footer, and Home, About, Services and Contact page patterns.
