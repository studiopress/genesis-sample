<?php
/**
 * Genesis Sample.
 *
 * This file adds the required WooCommerce setup functions.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

/**
 * Add theme support for WooCommerce to the Genesis Sample Theme.
 *
 * @since 2.3.0
 */
add_theme_support( 'genesis-connect-woocommerce' );

add_filter( 'woocommerce_enqueue_styles', 'genesis_sample_woocommerce_styles' );
/**
 * Enqueue the Genesis Sample Theme's custom WooCommerce styles to the WooCommerce plugin.
 *
 * @since 2.3.0
 *
 * @return array() Required values for the Genesis Sample Theme's WooCommerce stylesheet.
 */
function genesis_sample_woocommerce_styles( $enqueue_styles ) {

	$enqueue_styles['genesis-sample-woocommerce-styles'] = array(
		'src'     => get_stylesheet_directory_uri() . '/lib/woocommerce/genesis-sample-woocommerce.css',
		'deps'    => '',
		'version' => CHILD_THEME_VERSION,
		'media'   => 'screen'
	);

	return $enqueue_styles;

}