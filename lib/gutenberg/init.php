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
        'genesis-sample-gutenberg-fonts',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
        array(),
        CHILD_THEME_VERSION
	);

	/* Enqueue a separate admin stylesheet from the main `style-editor.css` to
	 * style the admin editor title only, due to this issue:
	 * https://github.com/WordPress/gutenberg/issues/10485.
	 * TODO: move this to `style-editor.css` once it's possible to style
	 * elements outside `.editor-block-list__block` via `add_editor_styles`.
	 */
	wp_enqueue_style(
        'genesis-sample-editor-title',
        get_stylesheet_directory_uri() . '/lib/gutenberg/style-editor-title.css',
        array(),
        CHILD_THEME_VERSION
    );

}

// Add support for editor styles.
add_theme_support( 'editor-styles' );

// Enqueue editor styles.
add_editor_style( '/lib/gutenberg/style-editor.css' );

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
