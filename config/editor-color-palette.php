<?php
/**
 * Genesis Sample child theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-sample/
 */

/**
 * Editor color palette config.
 */
return array(
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
);
