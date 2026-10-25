<?php
/**
 * Elayne Legal functions and definitions
 *
 * @package ElayneLegal
 * @since   0.1.0
 */

namespace ElayneLegal;

/**
 * Register Legal Corporate block styles and enqueue their CSS on demand.
 *
 * Each CSS file loads only on pages where the corresponding section is used.
 * The header CSS is enqueued against core/group without a registered style,
 * because the header pattern scopes its own selectors.
 */
function register_block_styles() {
	$styles = array(
		'legal-corporate-hero' => __( 'Legal Corporate Hero', 'elayne' ),
		'legal-practice-areas' => __( 'Legal Practice Areas', 'elayne' ),
	);

	foreach ( $styles as $name => $label ) {
		register_block_style(
			'core/group',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);

		wp_enqueue_block_style(
			'core/group',
			array(
				'handle' => "elayne-legal-{$name}",
				'src'    => get_theme_file_uri( "assets/styles/block-styles/{$name}.css" ),
				'path'   => get_theme_file_path( "assets/styles/block-styles/{$name}.css" ),
			)
		);
	}

	wp_enqueue_block_style(
		'core/group',
		array(
			'handle' => 'elayne-legal-corporate-header',
			'src'    => get_theme_file_uri( 'assets/styles/block-styles/legal-corporate-header.css' ),
			'path'   => get_theme_file_path( 'assets/styles/block-styles/legal-corporate-header.css' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );

/**
 * Enqueue the practice-area filter script only when the section is rendered.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Parsed block.
 * @return string Unmodified block content.
 */
function enqueue_practice_filter( $block_content, $block ) {
	if ( 'core/group' !== $block['blockName'] || empty( $block['attrs']['className'] ) || false === strpos( $block['attrs']['className'], 'is-style-legal-practice-areas' ) ) {
		return $block_content;
	}

	wp_enqueue_script(
		'elayne-legal-practice-filter',
		get_theme_file_uri( 'assets/js/legal-practice-filter.js' ),
		array(),
		(string) filemtime( get_theme_file_path( 'assets/js/legal-practice-filter.js' ) ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	return $block_content;
}
add_filter( 'render_block', __NAMESPACE__ . '\enqueue_practice_filter', 10, 2 );

/**
 * Point the parent's template-part references at this theme.
 *
 * Elayne's template patterns hard-code `"theme":"elayne"` on their
 * template-part blocks (its compliance checker requires the attribute).
 * WordPress only resolves a part from the theme files when that attribute
 * equals the active stylesheet, so under a child theme every part would render
 * as unavailable and the child's own parts/header.html would never be reached.
 * Rewrite the attribute at render time; parts the child does not ship fall
 * back to the parent's files.
 *
 * @param array $parsed_block The block being rendered.
 * @return array Block with the theme attribute retargeted.
 */
function retarget_template_parts( $parsed_block ) {
	if ( 'core/template-part' === $parsed_block['blockName'] && get_template() === ( $parsed_block['attrs']['theme'] ?? '' ) ) {
		$parsed_block['attrs']['theme'] = get_stylesheet();
	}

	return $parsed_block;
}
add_filter( 'render_block_data', __NAMESPACE__ . '\\retarget_template_parts' );
