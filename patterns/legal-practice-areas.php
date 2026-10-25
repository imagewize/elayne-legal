<?php
/**
 * Title: Legal Practice Areas (Filterable)
 * Slug: elayne/legal-practice-areas
 * Description: Practice-area cards that visitors can filter by area of law and by office. Works without JavaScript (all cards show).
 * Categories: elayne/legal, elayne/features
 * Keywords: legal, law firm, practice areas, services, filter, offices
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/legal","elayne/features"],"patternName":"elayne/legal-practice-areas","name":"Legal Practice Areas (Filterable)"},"anchor":"practice","align":"full","className":"is-style-legal-practice-areas","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div id="practice" class="wp-block-group alignfull is-style-legal-practice-areas has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"40rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-eyebrow","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-eyebrow has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Practice areas', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Find the right counsel for your matter.', 'elayne-legal' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Filter by area of law and by office to see who can help.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-filter-bar","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group legal-filter-bar has-base-background-color has-background"><!-- wp:group {"className":"legal-filter-office-group","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group legal-filter-office-group"><!-- wp:paragraph {"className":"legal-filter-label"} -->
<p class="legal-filter-label"><?php esc_html_e( 'Office', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"legal-filter-office"} -->
<div class="wp-block-buttons legal-filter-office"><!-- wp:button {"className":"legal-tab legal-tab-all"} -->
<div class="wp-block-button legal-tab legal-tab-all"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'All offices', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-amsterdam"} -->
<div class="wp-block-button legal-tab legal-tab-amsterdam"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-rotterdam"} -->
<div class="wp-block-button legal-tab legal-tab-rotterdam"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-utrecht"} -->
<div class="wp-block-button legal-tab legal-tab-utrecht"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Utrecht', 'elayne-legal' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"legal-filter-type"} -->
<div class="wp-block-buttons legal-filter-type"><!-- wp:button {"className":"legal-tab legal-tab-all"} -->
<div class="wp-block-button legal-tab legal-tab-all"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'All', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-business"} -->
<div class="wp-block-button legal-tab legal-tab-business"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Business', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-property"} -->
<div class="wp-block-button legal-tab legal-tab-property"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Property', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-family-estate"} -->
<div class="wp-block-button legal-tab legal-tab-family-estate"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Family & Estate', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-disputes"} -->
<div class="wp-block-button legal-tab legal-tab-disputes"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Disputes', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"legal-tab legal-tab-immigration"} -->
<div class="wp-block-button legal-tab legal-tab-immigration"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Immigration', 'elayne-legal' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area-grid","layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group legal-area-grid"><!-- wp:group {"className":"legal-area legal-cat-business legal-loc-amsterdam legal-loc-rotterdam"} -->
<div class="wp-block-group legal-area legal-cat-business legal-loc-amsterdam legal-loc-rotterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Business', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Company Formation', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Entity selection, incorporation and shareholder agreements for new and foreign-owned companies.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-business legal-loc-amsterdam"} -->
<div class="wp-block-group legal-area legal-cat-business legal-loc-amsterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Business', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Corporate Governance & M&A', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Board advice, due diligence, acquisitions and restructurings.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-business legal-loc-amsterdam legal-loc-rotterdam legal-loc-utrecht"} -->
<div class="wp-block-group legal-area legal-cat-business legal-loc-amsterdam legal-loc-rotterdam legal-loc-utrecht"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Business', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Commercial Contracts', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Drafting, negotiation and review of supply, services and licensing agreements.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Utrecht', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-business legal-loc-amsterdam legal-loc-rotterdam"} -->
<div class="wp-block-group legal-area legal-cat-business legal-loc-amsterdam legal-loc-rotterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Business', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Employment Law', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Contracts, dismissals, restructuring and workplace compliance.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-property legal-loc-amsterdam legal-loc-rotterdam legal-loc-utrecht"} -->
<div class="wp-block-group legal-area legal-cat-property legal-loc-amsterdam legal-loc-rotterdam legal-loc-utrecht"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Property', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Real Estate Transactions', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Purchase, sale and financing of residential and commercial property.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Utrecht', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-property legal-loc-amsterdam legal-loc-rotterdam"} -->
<div class="wp-block-group legal-area legal-cat-property legal-loc-amsterdam legal-loc-rotterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Property', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Landlord & Tenant', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Lease drafting, rent reviews and tenancy disputes.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-family-estate legal-loc-amsterdam legal-loc-rotterdam legal-loc-utrecht"} -->
<div class="wp-block-group legal-area legal-cat-family-estate legal-loc-amsterdam legal-loc-rotterdam legal-loc-utrecht"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Family & Estate', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Divorce & Custody', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Separation, parenting plans and property division, handled with discretion.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Utrecht', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-family-estate legal-loc-amsterdam legal-loc-utrecht"} -->
<div class="wp-block-group legal-area legal-cat-family-estate legal-loc-amsterdam legal-loc-utrecht"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Family & Estate', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Wills & Estates', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Wills, trusts, probate and succession planning.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Utrecht', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-disputes legal-loc-amsterdam legal-loc-rotterdam"} -->
<div class="wp-block-group legal-area legal-cat-disputes legal-loc-amsterdam legal-loc-rotterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Disputes', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Civil Litigation', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Representation in court and appeals for complex commercial and civil matters.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-disputes legal-loc-amsterdam"} -->
<div class="wp-block-group legal-area legal-cat-disputes legal-loc-amsterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Disputes', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Arbitration & Mediation', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Confidential alternatives to litigation, with experienced neutrals.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-disputes legal-loc-amsterdam legal-loc-rotterdam"} -->
<div class="wp-block-group legal-area legal-cat-disputes legal-loc-amsterdam legal-loc-rotterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Disputes', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Criminal Defense', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Investigations, white-collar matters and representation at every stage.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-area legal-cat-immigration legal-loc-amsterdam legal-loc-rotterdam"} -->
<div class="wp-block-group legal-area legal-cat-immigration legal-loc-amsterdam legal-loc-rotterdam"><!-- wp:paragraph {"className":"legal-area-tag","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-area-tag has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Immigration', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><a href="#contact"><?php esc_html_e( 'Business Visas & Permits', 'elayne-legal' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Highly skilled migrant, investor and intra-company transfer applications.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-area-where","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group legal-area-where"><!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-area-chip","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-area-chip has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"legal-empty","align":"center","textColor":"main-accent","fontSize":"small"} -->
<p class="legal-empty has-text-align-center has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'No practice areas match this combination. Try another office.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
