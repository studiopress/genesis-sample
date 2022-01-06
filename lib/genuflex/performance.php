<?php
/**
 * Various security functions not related to cleaning up the WP meta.
 *
 * @package Genuflex
 */

// Security Check: Prevent this file being executed outside the WordPress context.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

/**
 * -----------------------------------------------------------------
 * TABLE OF CONTENTS:
 * - Enable DNS prefetching
 * - Remove password strength meter on unrelated pages
 * - Dequeue Dashicons on front end: genuflex_dequeue_dashicons()
 * - Remove query strings so that browsers can cache: genuflex_cleanup_query_string()
 * - Patch BackWPUp timeout
 * - Speed up Google Fonts
 * -----------------------------------------------------------------
 */


/**
 * Add DNS Prefetching and Preconnecting Resource Hints to the <head>
 *
 * Preload: fetch high priority resource used in current route
 * Preconnect: resolves DNS and TCP handshaking
 * Prefetch: fetches resources probably needed for next page load (low priority)
 */
function genuflex_dns_prefetch_preconnect() {
	echo "
	<!-- DNS PREFETCHING FOR PERFORMANCE -->
	<meta http-equiv='x-dns-prefetch-control' content='on'>

	<link rel='dns-prefetch' href='//maps.googleapis.com/' />
	<link rel='dns-prefetch' href='//maps.gstatic.com/' />
	<link rel='dns-prefetch' href='//ajax.googleapis.com/' />
	<link rel='dns-prefetch' href='//fonts.gstatic.com/' />
	<link rel='dns-prefetch' href='//fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='//apis.google.com/' />
	<link rel='dns-prefetch' href='//youtube.com/' />
	<link rel='dns-prefetch' href='//s0.wp.com/' />
	<link rel='dns-prefetch' href='//s1.wp.com/' />
	<link rel='dns-prefetch' href='//s2.wp.com/' />
	<link rel='dns-prefetch' href='//stats.wp.com/' />
	<link rel='dns-prefetch' href='//google-analytics.com/' />
	<link rel='dns-prefetch' href='//www.google-analytics.com/' />
	<link rel='dns-prefetch' href='//ssl.google-analytics.com/' />

	";

}
add_action( 'wp_head', 'genuflex_dns_prefetch_preconnect', 0 );


if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	/**
	 * Utility function to check if WooCommerce is activated
	 */
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) {
			return true;
		} else {
			return false;
		}
	}
}


/**
 * Remove the password strength meter check on unrelated pages
 */
function genuflex_remove_password_strength_meter() {
	$valid_pages =
		isset( $wp->query_vars['lost-password'] )
		|| ( isset( $_GET['action'] ) && 'lostpassword' === $_GET['action'] )
		|| is_page( 'lost_password' );

	$wc_valid_pages = null;

	$is_woo_active = false;
	if ( function_exists( 'is_woocommerce_activated' ) ) {
		$is_woo_active = is_woocommerce_activated();
	}


	if( $is_woo_active ) {
		$wc_valid_pages =
		is_woocommerce_activated() // true or false.
		|| $valid_pages // lost-password.
		|| is_account_page()
		|| is_checkout();
	}

	/*
	 * if woocommerce is enabled, don't do it on the valid pages, ie:
	 * lost_password, checkout, account page.
	 * If it is not any of these pages, then dequeue the script.
	 */
	if ( ! $wc_valid_pages ) {
		if ( wp_script_is( 'zxcvbn-async', 'enqueued' ) ) {
			wp_dequeue_script( 'zxcvbn-async' );
		}

		if ( wp_script_is( 'password-strength-meter', 'enqueued' ) ) {
			wp_dequeue_script( 'password-strength-meter' );
		}

		if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
			wp_dequeue_script( 'wc-password-strength-meter' );
		}
	}

	/* else if woocommerce is not active, still dequeue the scripts on other pages */
	if ( $valid_pages ) {
		if ( wp_script_is( 'zxcvbn-async', 'enqueued' ) ) {
			wp_dequeue_script( 'zxcvbn-async' );
		}

		if ( wp_script_is( 'password-strength-meter', 'enqueued' ) ) {
			wp_dequeue_script( 'password-strength-meter' );
		}
	}

}
add_action( 'wp_print_scripts', 'genuflex_remove_password_strength_meter', 100 );


/**
 * Removes query strings from resources to enable caching.
 *
 * Most servers do not cache resources (eg scripts, stylesheets) that have query
 * strings (eg version numbers). We can speed up performance by stripping those
 * from our URLs.
 *
 * @param string $src The link from which to remove the version query string.
 */
function genuflex_cleanup_query_string( $src ) {
	$parts = explode( '?ver', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', 'genuflex_cleanup_query_string', 15, 1 );
add_filter( 'style_loader_src', 'genuflex_cleanup_query_string', 15, 1 );


/**
 * -----------------------------------------------------------------
 * FIX BACKWPUP TIMEOUT PATCH
 * -----------------------------------------------------------------
 */
function __extend_http_request_timeout( $timeout ) {
	return 60;
}
add_filter( 'http_request_timeout', '__extend_http_request_timeout' );


/**
 * Speeds up Google Fonts.
 *
 * Inserts elements into the beginning of the `<head>` before
 * any styles or scripts. In this case, we preemptively warm up the fonts' origin
 * by using `preconnect`. Then initiate a high-priority, asynchronous fetch for
 * the CSS file using `preload`. Then initiate a low-priority, asynchronous fetch
 * that gets applied to the page only _after_ it’s arrived. Works in all browsers
 * with JavaScript enabled. Finally, we enable a fallback in case the user has
 * javascript disabled.
 *
 * _Note:_ This action fires in the head, before `wp_head()` is called.
 *
 * @link https://csswizardry.com/2020/05/the-fastest-google-fonts/
 */
function genuflex_lightning_fast_google_fonts() {
	echo "
	<!-- 0. Lightning fast Google Fonts: https://csswizardry.com/2020/05/the-fastest-google-fonts/ -->
	<!-- 1. Preemptively warm up the fonts' origin. -->
	<link rel='preconnect' href='//fonts.gstatic.com/' crossorigin>
	<link rel='preconnect' href='//fonts.googleapis.com/' crossorigin>

	<!-- 2. Initiate a high-priority, asynchronous fetch for the CSS file. -->
	<!-- Works in most modern browsers. -->
	<link rel='preload'
		as='style'
		href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap' />

	<!-- 3. Initiate a low-priority, asynchronous fetch that gets applied to
			the page - only after it’s arrived. Works in all browsers with
			JavaScript enabled. -->
	<link rel='stylesheet'
			href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap'
			media='print' onload='this.media=&#34;all&#34;' />

	<!-- 4. In the unlikely event that a visitor has intentionally disabled
			JavaScript, fall back to the original method. The good news is that,
			although this is a render-blocking request, it can still make use of the
			preconnect which makes it marginally faster than the default. -->
	<noscript>
		<link rel='stylesheet'
			href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap' />
	</noscript>

	";
}
add_action( 'genesis_meta', 'genuflex_lightning_fast_google_fonts' );
