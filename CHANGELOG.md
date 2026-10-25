# Changelog

All notable changes to Elayne Legal are documented here. The format follows
[Keep a Changelog](https://keepachangelog.com/) and the project uses
[Semantic Versioning](https://semver.org/).

## [Unreleased]

### Added
- `package.json` with `@imwz/wp-pattern-sentinel` and `validate` scripts, so patterns can be checked in the Gutenberg editor like in Elayne.
- Child theme of Elayne for law firms, extracted from the legal patterns bundled in Elayne 4.11.0.
- Legal Corporate style variation: Source Serif 4 headings, Open Sans body, compact type scale, navy and gold palette.
- Legal Blue style variation.
- Legal Corporate Header pattern: navy utility bar plus white sticky bar with monogram brand mark, navigation and consultation button.
- Legal Corporate Footer pattern and `parts/footer.html`: navy brand block, link columns and disclaimer bar.
- Legal Hero with Enquiry Form and Legal Practice Areas (filterable) patterns.
- Legal Corporate Home Page composite pattern (`page-legal-home`), starting with the enquiry hero.
- Legal Gold CTA Strip pattern.
- Legal Services Ticker pattern and `legal-ticker` block style: editable list duplicated into a scrolling track on render, paused on hover and static with reduced motion.
- Legal Departments (What We Do) pattern and `legal-departments` block style: five numbered cards with linked service lists in a 3 + 2 grid, last card in navy, arrow icon from `assets/images/icons/arrow-right.svg`. Added to `page-legal-home`.
- Legal Expertise Band pattern (navy cover block, headline and four feature points in a 2 x 2 grid) and `legal-expertise.css`, enqueued against `core/cover`. Ships as a solid colour because the prototype photo is Unsplash-licensed; add a background image to the cover for the faint texture. Added to `page-legal-home`.
- Legal services, about, stats, team, testimonials and contact patterns, and the slanted legal cover hero.
- `render_block_data` filter that retargets the parent's `"theme":"elayne"` template-part references so the child's `parts/header.html` renders.
- Bundled fonts: Source Serif 4, Open Sans and Mona Sans.
