<?php
/**
 * Block Editor settings specific to Genesis Sample.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_sample_link_color            = get_theme_mod( 'genesis_sample_link_color', genesis_sample_customizer_get_default_link_color() );
$genesis_sample_link_color_contrast   = genesis_sample_color_contrast( $genesis_sample_link_color );
$genesis_sample_link_color_brightness = genesis_sample_color_brightness( $genesis_sample_link_color, 35 );

return array(
	'admin-fonts-url'              => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
	'content-width'                => 1062,
	'default-button-bg'            => $genesis_sample_link_color,
	'default-button-color'         => $genesis_sample_link_color_contrast,
	'default-button-outline-hover' => $genesis_sample_link_color_brightness,
	'default-link-color'           => $genesis_sample_link_color,
	'editor-color-palette'         => array(
		array(
			'name'  => __( 'Custom color', 'genesis-sample' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => get_theme_mod( 'genesis_sample_link_color', genesis_sample_customizer_get_default_link_color() ),
		),
		array(
			'name'  => __( 'Accent color', 'genesis-sample' ),
			'slug'  => 'theme-secondary',
			'color' => get_theme_mod( 'genesis_sample_accent_color', genesis_sample_customizer_get_default_accent_color() ),
		),
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
	),
	'editor-font-sizes'            => array(
		array(
			'name' => __( 'Small', 'genesis-sample' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'genesis-sample' ),
			'size' => 16,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Large', 'genesis-sample' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'genesis-sample' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);
