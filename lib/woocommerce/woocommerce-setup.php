<?php
/**
 * Genesis Sample.
 *
 * This file adds the required WooCommerce setup functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

/**
 * Add theme support for WooCommerce.
 *
 * @since 2.3.0
 */
add_theme_support( 'genesis-connect-woocommerce' );

add_filter( 'woocommerce_enqueue_styles', 'genesis_sample_woocommerce_styles' );
/**
 * Enqueue the theme's custom WooCommerce styles to the WooCommerce plugin.
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

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'genesis_sample_woocommerce_breakpoint' );
/**
 * Modify the WooCommerce breakpoints.
 *
 * @since 1.1.0
 */
function genesis_sample_woocommerce_breakpoint() {

	$current = genesis_site_layout();
	$layouts = array(
		'one-sidebar' => array(
			'content-sidebar',
			'sidebar-content',
		),
		'two-sidebar' => array(
			'content-sidebar-sidebar',
			'sidebar-content-sidebar',
			'sidebar-sidebar-content',
		),
	);

	if ( in_array( $current, $layouts['two-sidebar'] ) ) {
		return '2000px'; // Show mobile styles immediately.
	}
	elseif ( in_array( $current, $layouts['one-sidebar'] ) ) {
		return '1200px';
	}
	else {
		return '860px';
	}

}

add_action( 'after_switch_theme', 'genesis_sample_woocommerce_image_dimensions', 1 );
/**
* Define WooCommerce image sizes on activation.
*
* @since 1.0.0
*/
function genesis_sample_woocommerce_image_dimensions() {

	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}

	$catalog = array(
		'width'  => '300', // px
		'height' => '300', // px
		'crop'   => 1,     // true
	);
	$single = array(
		'width'  => '600', // px
		'height' => '600', // px
		'crop'   => 1,     // true
	);
	$thumbnail = array(
		'width'  => '180', // px
		'height' => '180', // px
		'crop'   => 1,     // true
	);

	// Image sizes.
	update_option( 'shop_catalog_image_size', $catalog );     // Product category thumbs.
	update_option( 'shop_single_image_size', $single );       // Single product image.
	update_option( 'shop_thumbnail_image_size', $thumbnail ); // Image gallery thumbs.

}
