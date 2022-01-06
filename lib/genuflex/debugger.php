<?php
/**
 * Pretty-print various debugging functions.
 *
 * @package Genuflex
 */

// Security Check: Prevent this file being executed outside the WordPress context.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

if ( ! function_exists( 'print_r_hidden' ) ) {
	/**
	 * Wraps the print_r function in a comment tag so it's not visible except in the HTML source.
	 *
	 * Useful if you need to debug on a live site - you'll have to view the HTML
	 * source to see the debugging. Also, you can search for FOOBAR or GREP or
	 * whatever to find it.
	 *
	 * @param mixed $argument Whatever you want printed out.
	 */
	function print_r_hidden( $argument ) {
		echo '<!-- FOOBAR GREP ';
		print_r( $argument ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r.
		echo ' -->';
	}
}


if ( ! function_exists( 'print_r_pre' ) ) {
	/**
	 * Wraps the print_r function in a styled `<pre>` tag.
	 *
	 * @param mixed $argument Whatever you want printed out.
	 */
	function print_r_pre( $argument ) {
		echo "<pre style='color: steelblue; background: #eee; border: 1px dashed #bbb; padding: 10px;'>";
		print_r( $argument ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r.
		echo '</pre>';
	}
}

if ( ! function_exists( 'print_filters_for' ) ) {
	/**
	 * Pretty prints a list of all the functions/filters applied to a filter.
	 *
	 * For example `print_filters_for( 'the_content' );`
	 *
	 * @param string $hook The hook that you are querying. Default is empty.
	 */
	function print_filters_for( $hook = '' ) {
		global $wp_filter;
		if ( empty( $hook ) || ! isset( $wp_filter[ $hook ] ) ) {
			return;
		}
		print '<pre>';
		print_r( $wp_filter[ $hook ] ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r.
		print '</pre>';
	}
}

if ( ! function_exists( 'write_log' ) ) {
	/**
	 * Write to the WordPress error log (usually found at `wp-content/debug.log`).
	 *
	 * @param  mixed $log The error message to print out.
	 * @return void
	 */
	function write_log( $log ) {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
					error_log( print_r( $log, true ) );
			} else {
					error_log( $log );
			}
		}
	}
}
