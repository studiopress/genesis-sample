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
 * - Disable oEmbed: genuflex_stop_loading_wp_embed()
 * - Disable Referral Spam: genuflex_filter_referral_spam_requests()
 * - Disable blacklisted referrers: genuflex_referrals_blacklist()
 * - Prevent login errors revealing usernames
 * - Disable XML-RPC
 * -----------------------------------------------------------------
 */


/**
 * Since WP 4.4 oEmbed was merged into WP core. This feature allows you to embed
 * YouTube videos, tweets. It creates an additional HTTP request with wp-embed.min.js
 * which loads on every page. It also allows others to embed your post on their blog
 * by simply pasting a URL.
 */
function genuflex_stop_loading_wp_embed() {
	if ( ! is_admin() ) {
		/* only do this on the front end. */
		wp_deregister_script( 'wp-embed' );
	}
}
add_action( 'init', 'genuflex_stop_loading_wp_embed' );


/* Filters the array of parsed query variables. */
add_filter( 'request', 'genuflex_filter_referral_spam_requests', 0 );
/** Serve 404 to referrers on the current Blacklist */
function genuflex_filter_referral_spam_requests( $request ) {
	global $wp_query;

	/* Retrieve referer from ‘_wp_http_referer’ or HTTP referer. */
	$referrer = wp_get_referer() !== false ? wp_get_referer() : ( isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : '' );  // Input var okay.

	if ( empty( $referrer ) ) {
		return $request;
	}

	/*
	 Parses a URL and returns an associative array containing its components.
	 * The values of the array elements are not URL decoded
	 */
	$referrer = parse_url( $referrer, PHP_URL_HOST );

	/* Get the blacklist */
	$referrers_blacklist = genuflex_referrals_blacklist();

	if ( empty( $referrers_blacklist ) ) {
		return $request;
	}

	$is_blacklisted = false;

	/* check the referrer against the blacklist */
	foreach ( $referrers_blacklist as $blist_ref ) {
		if ( false !== stripos( $referrer, $blist_ref ) ) {
			$is_blacklisted = true;
			break;
		}
	}

	/* if they are blacklisted, serve them a 404 */
	if ( $is_blacklisted ) {
		/* Set HTTP status header. */
		status_header( 404 );
		$wp_query->set_404();
			get_template_part( 404 );
			exit();
	}
		return $request;
}


/**
 * Gets a list of blacklisted referrals from the JSON file of the plugin
 * Stop Referrer Spam by Krzysztof Wielogórski
 *
 * @see https://wordpress.org/plugins/stop-referrer-spam/
 */
function genuflex_referrals_blacklist() {

	/* Retrieves the value of a transient. */
	$ret = get_transient( '_referalls_spam_blacklist' );

	/* If the transient does not exist/no value/expired, then return = false. */
	if ( false === $ret ) {

		/* Performs an HTTP request using the GET method and returns its response. */
		$response = wp_remote_get( 'https://srs.wielo.co/blacklist.json' );

		if ( $response instanceof WP_Error ) {
			return;
		}

		$ret = $response['body'];

		if ( empty( $ret ) ) {
			return;
		}

		/* Decodes a JSON string for use in PHP */
		$ret = json_decode( $ret, true );

		if ( null === $ret ) {
			return;
		}

		set_transient( '_referalls_spam_blacklist', $ret, DAY_IN_SECONDS );    // Refresh daily.
	}

	return $ret;
}


/** Prevent login errors from revealing the username is correct. */
function genuflex_wordpress_errors() {
	return 'Oops. Either the username or the password is incorrect. Check again or try with your email address?';
}
add_filter( 'login_errors', 'genuflex_wordpress_errors' );

/** Disable XML-RPC from brute force attacks */
add_filter( 'xmlrpc_enabled', '_return_false' );


