# Changelog

All notable changes to Elayne Legal are documented here. The format follows
[Keep a Changelog](https://keepachangelog.com/) and the project uses
[Semantic Versioning](https://semver.org/).

## [Unreleased]

### Added
- Child theme of Elayne for law firms, extracted from the legal patterns bundled in Elayne 4.11.0.
- Legal Corporate style variation: Source Serif 4 headings, Open Sans body, compact type scale, navy and gold palette.
- Legal Blue style variation.
- Legal Corporate Header pattern: navy utility bar plus white sticky bar with monogram brand mark, navigation and consultation button.
- Legal Corporate Footer pattern and `parts/footer.html`: navy brand block, link columns and disclaimer bar.
- Legal Hero with Enquiry Form and Legal Practice Areas (filterable) patterns.
- Legal Corporate Home Page composite pattern (`page-legal-home`), starting with the enquiry hero.
- Legal Gold CTA Strip pattern.
- Legal services, about, stats, team, testimonials and contact patterns, and the slanted legal cover hero.
- `render_block_data` filter that retargets the parent's `"theme":"elayne"` template-part references so the child's `parts/header.html` renders.
- Bundled fonts: Source Serif 4, Open Sans and Mona Sans.
