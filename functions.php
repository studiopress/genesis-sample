<?php
/**
 * Custom amendments for the theme.
 *
 * @package    Genesis_Sample\Custom
 * @author     StudioPress
 * @license    GPL2-0+
 * @link       http://studiopress.com
 */

add_action( 'genesis_setup', 'genesis_sample_setup', 15 );
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 2.1.0
 */
function genesis_sample_setup() {
	define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
	define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
	define( 'CHILD_THEME_VERSION', '2.0.1' );

	load_child_theme_textdomain( 'genesis-sample', get_stylesheet_directory() . '/languages' );

	add_theme_support( 'html5' );
	add_theme_support( 'genesis-responsive-viewport' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'genesis-footer-widgets', 3 );

	// add_editor_style( 'editor-style.css' );

	add_action( 'wp_enqueue_scripts', 'genesis_sample_google_web_fonts' );

}

/**
 * Enqueue Google Web Fonts.
 *
 * @since Unknown
 */
function genesis_sample_google_web_fonts() {
	wp_enqueue_style( 'genesis-sample-google-web-fonts', '//fonts.googleapis.com/css?family=Lato:300,700', array(), CHILD_THEME_VERSION );
}
