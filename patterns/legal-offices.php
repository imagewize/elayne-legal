<?php
/**
 * Title: Legal Offices
 * Slug: elayne/legal-offices
 * Description: Three office cards (address, phone, hours) beside a decorative map panel for law firms with several locations.
 * Categories: elayne/legal, elayne/contact
 * Keywords: legal, law firm, offices, locations, address, contact
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/legal","elayne/contact"],"patternName":"elayne/legal-offices","name":"Legal Offices"},"anchor":"offices","align":"full","className":"is-style-legal-offices","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div id="offices" class="wp-block-group alignfull is-style-legal-offices has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"36rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-eyebrow","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-eyebrow has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Our offices', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Close to you, and to the courts.', 'elayne-legal' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-offices-grid","layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group legal-offices-grid"><!-- wp:group {"className":"legal-office-map","backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group legal-office-map has-primary-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/offices-map.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-office","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group legal-office has-base-background-color has-background"><!-- wp:group {"className":"legal-office-head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group legal-office-head"><!-- wp:heading {"level":3,"textColor":"primary","fontSize":"base"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-base-font-size"><?php esc_html_e( 'Amsterdam', 'elayne-legal' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Address', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Example Avenue 100, 1000 AA Amsterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Phone', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( '+31 20 210 31 38', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Hours', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Mon–Fri 8:30–18:00', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-office","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group legal-office has-base-background-color has-background"><!-- wp:group {"className":"legal-office-head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group legal-office-head"><!-- wp:heading {"level":3,"textColor":"primary","fontSize":"base"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-base-font-size"><?php esc_html_e( 'Rotterdam', 'elayne-legal' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Address', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Sample Quay 20, 3000 AA Rotterdam', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Phone', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( '+31 10 555 01 20', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Hours', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Mon–Fri 8:30–18:00', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"legal-office","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group legal-office has-base-background-color has-background"><!-- wp:group {"className":"legal-office-head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group legal-office-head"><!-- wp:heading {"level":3,"textColor":"primary","fontSize":"base"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-base-font-size"><?php esc_html_e( 'Utrecht', 'elayne-legal' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"legal-office-soon","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-office-soon has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Opening soon', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Address', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Demo Square 5, 3500 AA Utrecht', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Phone', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( '+31 30 555 01 30', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-label","textColor":"primary","fontSize":"x-small"} -->
<p class="legal-office-label has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Hours', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-office-value","textColor":"main-accent","fontSize":"x-small"} -->
<p class="legal-office-value has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'By appointment', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
