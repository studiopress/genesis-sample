<?php
/**
 * Genuflex child theme.
 *
 * Theme supports.
 *
 * @package Genuflex
 * @author  StudioPress, gillespieza
 * @license GPL-2.0-or-later
 * @link    https://github.com/gillespieza/genesass-and-genuflex/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
		'search-form',
		'script',
		'style',
	],
	'genesis-accessibility'           => [
		'404-page',
		'drop-down-menu', // adds SuperFish.js.
		'headings', // semantic headings.
		'rems',
		'search-form', // input labels.
		'skip-links',
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'genuflex' ),
		'secondary' => __( 'Footer Menu', 'genuflex' ),
	],
];

