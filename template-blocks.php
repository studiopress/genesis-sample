<?php
/**
 * Genesis Sample.
 *
 * A template to force full-width and remove the page title.
 *
 * Template Name: Blocks
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Removes Skip Links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );

add_action( 'wp_enqueue_scripts', 'genesis_sample_dequeue_skip_links' );
/**
 * Dequeues Skip Links Script.
 *
 * @since 1.0.0
 */
function genesis_sample_dequeue_skip_links() {

	wp_dequeue_script( 'skip-links' );

}

// Remove the page title.
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

add_filter( 'genesis_site_title_wrap', 'genesis_sample_h1_for_site_title' );
/**
 * Wraps the site title in an h1 element to make up for removing the page title.
 *
 * @param string $wrap The original wrap element.
 * @return string The new wrap element
 */
function genesis_sample_h1_for_site_title( $wrap ) {
	return 'h1';
}

// Forces full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Removes breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Runs the Genesis loop.
genesis();
