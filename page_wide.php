<?php
/**
 * Genesis Sample.
 *
 * This file adds the wide page template to the Genesis Sample Theme.
 *
 * Template Name: Wide
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://www.studiopress.com/
 */

add_filter( 'body_class', 'genesis_sample_add_body_class' );
/**
 * Adds wide page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'wide-page';
	return $classes;

}

// Forces full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Runs the Genesis loop.
genesis();
