<?php
/**
 * Genesass appearance settings.
 *
 * @package Genesass
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://github.com/gillespieza/genesass-and-genuflex/
 */

$genesass_default_colors = array(
	'link'   => '#036966', // skobeloff.
	'accent' => '#00b5b0', // tiffany blue.
);

$genesass_link_color = get_theme_mod(
	'genesass_link_color',
	$genesass_default_colors['link']
);

$genesass_accent_color = get_theme_mod(
	'genesass_accent_color',
	$genesass_default_colors['accent']
);

$genesass_link_color_contrast   = genesass_color_contrast( $genesass_link_color );
$genesass_link_color_brightness = genesass_color_brightness( $genesass_link_color, 35 );

return array(
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $genesass_link_color,
	'button-color'         => $genesass_link_color_contrast,
	'button-outline-hover' => $genesass_link_color_brightness,
	'link-color'           => $genesass_link_color,
	'default-colors'       => $genesass_default_colors,
	'editor-color-palette' => array(
		array(
			'name'  => __( 'Primary color', 'genesass' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genesass_link_color,
		),
		array(
			'name'  => __( 'Accent color', 'genesass' ),
			'slug'  => 'theme-secondary',
			'color' => $genesass_accent_color,
		),
		array(
			'name'  => __( 'White', 'genesass' ),
			'slug'  => 'theme-white',
			'color' => '#ffffff',
		),
		array(
			'name'  => __( 'Black', 'genesass' ),
			'slug'  => 'theme-black',
			'color' => '#000000',
		),
	),
	'editor-font-sizes'    => array(
		array(
			'name' => __( 'Small', 'genesass' ),
			'size' => 14,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'genesass' ),
			'size' => 16,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Lead', 'genesass' ),
			'size' => 18,
			'slug' => 'lead',
		),
		array(
			'name' => __( 'Large', 'genesass' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'genesass' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);


