<?php
/**
 * Gutenberg theme support.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_gutenberg_frontend_styles' );
/**
 * Enqueues Gutenberg front-end styles.
 *
 * @since 2.7.0
 */
function genesis_sample_enqueue_gutenberg_frontend_styles() {

	wp_enqueue_style(
		'genesis-sample-gutenberg',
		get_stylesheet_directory_uri() . '/lib/gutenberg/front-end.css',
		array( 'genesis-sample' ),
		CHILD_THEME_VERSION
	);

}

add_action( 'enqueue_block_editor_assets', 'genesis_sample_block_editor_styles' );
/**
 * Enqueues Gutenberg admin editor fonts and styles.
 *
 * @since 2.7.0
 */
function genesis_sample_block_editor_styles() {

	wp_enqueue_style(
        'genesis-sample-block-editor-fonts',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
        array(),
        CHILD_THEME_VERSION
    );
	wp_enqueue_style(
        'genesis-sample-block-editor-styles',
        get_stylesheet_directory_uri() . '/lib/gutenberg/style-editor.css',
        array(),
        CHILD_THEME_VERSION
    );

}

// Adds support for block alignments.
add_theme_support( 'align-wide' );

// Adds support for editor font sizes.
add_theme_support(
	'editor-font-sizes',
	array(
		array(
			'name'      => __( 'small', 'genesis-sample' ),
			'shortName' => __( 'S', 'genesis-sample' ),
			'size'      => 12,
			'slug'      => 'small',
		),
		array(
			'name'      => __( 'regular', 'genesis-sample' ),
			'shortName' => __( 'M', 'genesis-sample' ),
			'size'      => 16,
			'slug'      => 'regular',
		),
		array(
			'name'      => __( 'large', 'genesis-sample' ),
			'shortName' => __( 'L', 'genesis-sample' ),
			'size'      => 20,
			'slug'      => 'large',
		),
		array(
			'name'      => __( 'larger', 'genesis-sample' ),
			'shortName' => __( 'XL', 'genesis-sample' ),
			'size'      => 24,
			'slug'      => 'larger',
		),
	)
);

// Adds support for editor color palette.
add_theme_support(
	'editor-color-palette',
	array(
		array(
			'name'  => __( 'Light gray', 'genesis-sample' ),
			'slug'  => 'light-gray',
			'color' => '#f5f5f5',
		),
		array(
			'name'  => __( 'Medium gray', 'genesis-sample' ),
			'slug'  => 'medium-gray',
			'color' => '#999',
		),
		array(
			'name'  => __( 'Dark gray', 'genesis-sample' ),
			'slug'  => 'dark-gray',
			'color' => '#333',
		),
	)
);
