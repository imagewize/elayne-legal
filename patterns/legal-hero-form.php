<?php
/**
 * Title: Legal Hero with Enquiry Form
 * Slug: elayne/legal-hero-form
 * Description: Navy hero for law firms with headline, CTAs, key figures and a free-consultation enquiry card. Embeds Contact Form 7 (form id 1, editable in the shortcode block) when the plugin is active; otherwise shows placeholder fields.
 * Categories: elayne/hero, elayne/legal
 * Keywords: hero, legal, law firm, attorney, enquiry, consultation, form, corporate
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/hero","elayne/legal"],"patternName":"elayne/legal-hero-form","name":"Legal Hero with Enquiry Form"},"align":"full","className":"is-style-legal-corporate-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-legal-corporate-hero has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-hero-eyebrow","textColor":"primary-accent","fontSize":"x-small"} -->
<p class="legal-hero-eyebrow has-primary-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Business · Property · Family · Disputes', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"base","fontSize":"large"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-large-font-size"><?php echo wp_kses_post( __( 'Sound legal counsel for businesses, families and <em>investors</em>.', 'elayne' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"border-dark","fontSize":"base"} -->
<p class="has-border-dark-color has-text-color has-base-font-size"><?php esc_html_e( 'From company formation to cross-border disputes, our lawyers guide you from the first call to the final signature, in plain language and at a fixed fee where possible.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-alt-accent","textColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-alt-accent-background-color has-text-color has-background wp-element-button" href="#practice"><?php esc_html_e( 'Explore practice areas', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#enquiry"><?php esc_html_e( 'Speak to a lawyer', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"legal-hero-stats","layout":{"type":"grid","minimumColumnWidth":"7rem"}} -->
<div class="wp-block-group legal-hero-stats"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-hero-stat-number","textColor":"base","fontSize":"medium"} -->
<p class="legal-hero-stat-number has-base-color has-text-color has-medium-font-size"><?php esc_html_e( '3,600+', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-hero-stat-label","textColor":"border-dark","fontSize":"x-small"} -->
<p class="legal-hero-stat-label has-border-dark-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Clients advised', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-hero-stat-number","textColor":"base","fontSize":"medium"} -->
<p class="legal-hero-stat-number has-base-color has-text-color has-medium-font-size"><?php esc_html_e( '1,800+', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-hero-stat-label","textColor":"border-dark","fontSize":"x-small"} -->
<p class="legal-hero-stat-label has-border-dark-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Companies formed', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-hero-stat-number","textColor":"base","fontSize":"medium"} -->
<p class="legal-hero-stat-number has-base-color has-text-color has-medium-font-size"><?php esc_html_e( '20+', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-hero-stat-label","textColor":"border-dark","fontSize":"x-small"} -->
<p class="legal-hero-stat-label has-border-dark-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Years', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"legal-hero-stat-number","textColor":"base","fontSize":"medium"} -->
<p class="legal-hero-stat-number has-base-color has-text-color has-medium-font-size"><?php esc_html_e( '40+', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"legal-hero-stat-label","textColor":"border-dark","fontSize":"x-small"} -->
<p class="legal-hero-stat-label has-border-dark-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Services', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:group {"className":"legal-hero-form-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|sm"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div id="enquiry" class="wp-block-group legal-hero-form-card has-base-background-color has-background" style="border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"textColor":"primary","fontSize":"medium"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-medium-font-size"><?php esc_html_e( 'Request a free consultation', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Tell us what you need. A lawyer will reply within one working day.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<?php if ( function_exists( 'wpcf7' ) ) : ?><!-- wp:shortcode -->
[contact-form-7 id="1"]
<!-- /wp:shortcode -->
<?php else : ?><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Full name *', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Your name', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Email *', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'example@example.com', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Phone', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( '+00 00 000 00 00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'I need help with *', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Select an area of law', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Briefly describe your matter', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Tell us how we can help...', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="#enquiry"><?php esc_html_e( 'Book free consultation', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php endif; ?>

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Confidential. We never share your details.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
