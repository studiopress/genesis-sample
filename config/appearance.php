<?php
/**
 * Genuflex appearance settings.
 *
 * @package Genuflex
 * @author  StudioPress, gillespieza
 * @license GPL-2.0-or-later
 * @link    https://github.com/gillespieza/genesass-and-genuflex/
 */

$genuflex_default_colors = array(
	'link'   => '#036966', // skobeloff.
	'accent' => '#00b5b0', // tiffany blue.
);

$genuflex_link_color = get_theme_mod(
	'genuflex_link_color',
	$genuflex_default_colors['link']
);

$genuflex_accent_color = get_theme_mod(
	'genuflex_accent_color',
	$genuflex_default_colors['accent']
);

$genuflex_link_color_contrast   = genuflex_color_contrast( $genuflex_link_color );
$genuflex_link_color_brightness = genuflex_color_brightness( $genuflex_link_color, 35 );

return array(
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $genuflex_link_color,
	'button-color'         => $genuflex_link_color_contrast,
	'button-outline-hover' => $genuflex_link_color_brightness,
	'link-color'           => $genuflex_link_color,
	'default-colors'       => $genuflex_default_colors,
	'editor-color-palette' => array(
		array(
			'name'  => __( 'Primary color', 'genuflex' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genuflex_link_color,
		),
		array(
			'name'  => __( 'Accent color', 'genuflex' ),
			'slug'  => 'theme-secondary',
			'color' => $genuflex_accent_color,
		),
		array(
			'name'  => __( 'White', 'genuflex' ),
			'slug'  => 'theme-white',
			'color' => '#ffffff',
		),
		array(
			'name'  => __( 'Black', 'genuflex' ),
			'slug'  => 'theme-black',
			'color' => '#000000',
		),
	),
	'editor-font-sizes'    => array(
		array(
			'name' => __( 'Small', 'genuflex' ),
			'size' => 14,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'genuflex' ),
			'size' => 16,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Lead', 'genuflex' ),
			'size' => 18,
			'slug' => 'lead',
		),
		array(
			'name' => __( 'Large', 'genuflex' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'genuflex' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);


