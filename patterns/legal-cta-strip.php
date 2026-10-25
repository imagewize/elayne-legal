<?php
/**
 * Title: Legal Gold CTA Strip
 * Slug: elayne/legal-cta-strip
 * Description: Slim gold call-to-action band for law firms with a short headline, supporting line and two buttons.
 * Categories: elayne/call-to-action, elayne/legal
 * Keywords: cta, call to action, legal, law firm, consultation, enquiry, banner
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/call-to-action","elayne/legal"],"patternName":"elayne/legal-cta-strip","name":"Legal Gold CTA Strip"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"primary-accent","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained","contentSize":"40rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"primary-alt","fontSize":"medium"} -->
<h2 class="wp-block-heading has-primary-alt-color has-text-color has-medium-font-size"><?php esc_html_e( 'Not sure where to start? Speak to a lawyer.', 'elayne-legal' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary-alt","fontSize":"small"} -->
<p class="has-primary-alt-color has-text-color has-small-font-size"><?php esc_html_e( 'Your first 30-minute consultation is free and confidential.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","backgroundColor":"primary-alt","textColor":"base","style":{"border":{"radius":"0"},"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--x-small)"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-primary-alt-background-color has-text-color has-background wp-element-button" href="#enquiry" style="border-radius:0;font-size:var(--wp--preset--font-size--x-small);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Book a consultation', 'elayne-legal' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","textColor":"primary-alt","borderColor":"primary-alt","style":{"border":{"radius":"0","width":"1px"},"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--x-small)"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-alt-color has-text-color has-border-color has-primary-alt-border-color wp-element-button" href="#practice" style="border-width:1px;border-radius:0;font-size:var(--wp--preset--font-size--x-small);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Our practice areas', 'elayne-legal' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
