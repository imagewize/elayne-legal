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
