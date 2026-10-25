<?php
/**
 * Title: Legal Corporate Services Page
 * Slug: elayne/page-legal-services
 * Description: Full services page for a law firm: navy page header, departments, filterable practice areas, expertise band and a gold call-to-action strip.
 * Categories: elayne/page, elayne/legal
 * Keywords: services, practice areas, legal, law firm
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"patternName":"elayne/page-legal-services","name":"Page Header"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"primary-alt","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"40rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-eyebrow","textColor":"primary-alt-accent","fontSize":"x-small"} -->
<p class="legal-eyebrow has-primary-alt-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Our services', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"base","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php esc_html_e( 'Everything you need, under one roof.', 'elayne-legal' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"border-dark","fontSize":"base"} -->
<p class="has-border-dark-color has-text-color has-base-font-size"><?php esc_html_e( 'Five departments working together, so you deal with one team and one invoice.', 'elayne-legal' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"elayne/legal-departments"} /-->

<!-- wp:pattern {"slug":"elayne/legal-practice-areas"} /-->

<!-- wp:pattern {"slug":"elayne/legal-expertise-band"} /-->

<!-- wp:pattern {"slug":"elayne/legal-cta-strip"} /-->
