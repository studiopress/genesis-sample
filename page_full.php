<?php
/**
 * Genesis Sample.
 *
 * This file adds the Full-width page template to the Genesis Sample Theme.
 *
 * Template Name: Full-width
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://www.studiopress.com/
 */

add_filter( 'body_class', 'genesis_sample_add_body_class' );
/**
 * Adds full page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'full-width-page';
	return $classes;

}

// Forces full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Removes entry header.
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

// Runs the Genesis loop.
genesis();
