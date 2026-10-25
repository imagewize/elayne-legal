<?php
/**
 * Title: Legal Corporate Header
 * Slug: elayne/legal-corporate-header
 * Description: Two-bar header for law firms: navy utility bar (phone, email, hours) above a white bar with monogram brand mark, navigation and a consultation button
 * Categories: elayne/legal, elayne/header
 * Keywords: header, legal, law firm, attorney, notary, utility bar, navigation
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"categories":["elayne/legal","elayne/header"],"patternName":"elayne/legal-corporate-header","name":"Legal Corporate Header"},"align":"full","className":"legal-corporate-header","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<header class="wp-block-group alignfull legal-corporate-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Utility Bar"},"align":"full","className":"hide-on-mobile legal-corporate-utility","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-small","bottom":"var:preset|spacing|2-x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"primary-alt","textColor":"border-dark","fontSize":"xx-small","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hide-on-mobile legal-corporate-utility has-border-dark-color has-primary-alt-background-color has-text-color has-background has-xx-small-font-size" style="padding-top:var(--wp--preset--spacing--2-x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--2-x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|border-dark"}}}},"fontSize":"xx-small"} -->
<p class="has-link-color has-xx-small-font-size"><a href="tel:+31202103138"><?php esc_html_e( '+31 20 210 31 38', 'elayne-legal' ); ?></a> <a href="mailto:example@example.com"><?php esc_html_e( 'example@example.com', 'elayne-legal' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xx-small"} -->
<p class="has-xx-small-font-size"><?php esc_html_e( 'Mon–Fri 8:30–18:00 · Reply within one working day', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Main Bar"},"align":"full","className":"legal-corporate-main-bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|border-dark","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull legal-corporate-main-bar has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-dark);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-corporate-brand-mark","textColor":"primary","fontSize":"small"} -->
<p class="legal-corporate-brand-mark has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'AM', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"legal-corporate-brand-name","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group legal-corporate-brand-name"><!-- wp:site-title {"level":0,"isLink":false} /-->

<!-- wp:paragraph {"className":"legal-corporate-tagline","textColor":"main-accent","fontSize":"xx-small"} -->
<p class="legal-corporate-tagline has-main-accent-color has-text-color has-xx-small-font-size"><?php echo esc_html_x( 'Attorneys & Notaries', 'law firm tagline', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"icon":"menu","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"hide-on-mobile"} -->
<div class="wp-block-buttons hide-on-mobile"><!-- wp:button {"backgroundColor":"primary-alt-accent","textColor":"base","className":"legal-corporate-header-cta","style":{"border":{"radius":"var:preset|border-radius|sm","width":"0px"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<div class="wp-block-button legal-corporate-header-cta"><a class="wp-block-button__link has-base-color has-primary-alt-accent-background-color has-text-color has-background has-custom-font-size wp-element-button" href="#enquiry" style="border-width:0px;border-radius:var(--wp--preset--border-radius--sm);font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Free consultation', 'elayne-legal' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
