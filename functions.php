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
 * The header and footer CSS are enqueued against core/group without a
 * registered style, because those patterns scope their own selectors.
 */
function register_block_styles() {
	$styles = array(
		'legal-corporate-hero' => __( 'Legal Corporate Hero', 'elayne-legal' ),
		'legal-practice-areas' => __( 'Legal Practice Areas', 'elayne-legal' ),
		'legal-ticker'         => __( 'Legal Ticker', 'elayne-legal' ),
		'legal-departments'    => __( 'Legal Departments', 'elayne-legal' ),
		'legal-offices'        => __( 'Legal Offices', 'elayne-legal' ),
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
				'ver'    => (string) filemtime( get_theme_file_path( "assets/styles/block-styles/{$name}.css" ) ),
			)
		);
	}

	foreach ( array( 'legal-corporate-header', 'legal-corporate-footer' ) as $name ) {
		wp_enqueue_block_style(
			'core/group',
			array(
				'handle' => "elayne-{$name}",
				'src'    => get_theme_file_uri( "assets/styles/block-styles/{$name}.css" ),
				'path'   => get_theme_file_path( "assets/styles/block-styles/{$name}.css" ),
				'ver'    => (string) filemtime( get_theme_file_path( "assets/styles/block-styles/{$name}.css" ) ),
			)
		);
	}

	// Button hover states apply to every core/button, so they load with the block.
	wp_enqueue_block_style(
		'core/button',
		array(
			'handle' => 'elayne-legal-buttons',
			'src'    => get_theme_file_uri( 'assets/styles/block-styles/legal-buttons.css' ),
			'path'   => get_theme_file_path( 'assets/styles/block-styles/legal-buttons.css' ),
			'ver'    => (string) filemtime( get_theme_file_path( 'assets/styles/block-styles/legal-buttons.css' ) ),
		)
	);

	// The expertise band is a cover block that scopes its own selectors (class legal-expertise).
	wp_enqueue_block_style(
		'core/cover',
		array(
			'handle' => 'elayne-legal-expertise',
			'src'    => get_theme_file_uri( 'assets/styles/block-styles/legal-expertise.css' ),
			'path'   => get_theme_file_path( 'assets/styles/block-styles/legal-expertise.css' ),
			'ver'    => (string) filemtime( get_theme_file_path( 'assets/styles/block-styles/legal-expertise.css' ) ),
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
 * Turn the list in a legal-ticker group into a seamless scrolling track.
 *
 * The editor keeps a plain, editable list. On the front end the list is
 * duplicated (the copy hidden from assistive tech) and both are wrapped in a
 * track that CSS translates by half its width.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Parsed block.
 * @return string Block HTML with the ticker track.
 */
function render_ticker( $block_content, $block ) {
	if ( 'core/group' !== $block['blockName'] || empty( $block['attrs']['className'] ) || false === strpos( $block['attrs']['className'], 'is-style-legal-ticker' ) ) {
		return $block_content;
	}

	if ( ! preg_match( '#<ul\b.*?</ul>#s', $block_content, $match ) ) {
		return $block_content;
	}

	$copy  = preg_replace( '#^<ul\b#', '<ul aria-hidden="true"', $match[0] );
	$track = '<div class="legal-ticker__track">' . $match[0] . $copy . '</div>';

	return str_replace( $match[0], $track, $block_content );
}
add_filter( 'render_block', __NAMESPACE__ . '\render_ticker', 10, 2 );

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
