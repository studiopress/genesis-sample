<?php
/**
 * Genesis Sample.
 *
 * This file adds the required CSS to the front end to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

add_action( 'wp_enqueue_scripts', 'genesis_sample_css' );
/**
* Checks the settings for the link color, and accent color.
* If any of these value are set the appropriate CSS is output.
*
* @since 2.2.3
*/
function genesis_sample_css() {

	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';

	$color_link = get_theme_mod( 'genesis_sample_link_color', genesis_sample_customizer_get_default_link_color() );
	$color_accent = get_theme_mod( 'genesis_sample_accent_color', genesis_sample_customizer_get_default_accent_color() );

	$css = '';
	$woo_css = '';

	// Calculate Color Contrast.
	function genesis_sample_color_contrast( $color ) {
	
		$hexcolor = str_replace( '#', '', $color );

		$red   = hexdec( substr( $hexcolor, 0, 2 ) );
		$green = hexdec( substr( $hexcolor, 2, 2 ) );
		$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

		$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

		return ( $luminosity > 128 ) ? '#333333' : '#ffffff';

	}
	
	// Calculate Color Brightness.
	function genesis_sample_color_brightness( $color, $change ) {

		$hexcolor = str_replace( '#', '', $color );

		$red   = hexdec( substr( $hexcolor, 0, 2 ) );
		$green = hexdec( substr( $hexcolor, 2, 2 ) );
		$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

		$red   = max( 0, min( 255, $red + $change ) );
		$green = max( 0, min( 255, $green + $change ) );  
		$blue  = max( 0, min( 255, $blue + $change ) );

		return '#'.dechex( $red ).dechex( $green ).dechex( $blue );

	}

	$css .= ( genesis_sample_customizer_get_default_link_color() !== $color_link ) ? sprintf( '

		a,
		.entry-title a::focus,
		.entry-title a::hover,
		.genesis-nav-menu a::focus,
		.genesis-nav-menu a::hover,
		.genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu .current-menu-item > a::focus,
		.genesis-nav-menu .sub-menu .current-menu-item > a::hover,
		.js nav button::focus,
		.js .menu-toggle::focus {
			color: %s;
		}
		', $color_link ) : '';

	$woo_css .= ( genesis_sample_customizer_get_default_link_color() !== $color_link ) ? sprintf( '
		
		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a::hover,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a::focus,
		.woocommerce ul.products li.product h3::hover,
		.woocommerce ul.products li.product .price,
		.woocommerce .woocommerce-breadcrumb a::hover,
		.woocommerce .woocommerce-breadcrumb a::focus,
		.woocommerce .widget_layered_nav ul li.chosen a::before,
		.woocommerce .widget_layered_nav_filters ul li a::before {
			color: %s;
		}

	', $color_link ) : '';

	$css .= ( genesis_sample_customizer_get_default_accent_color() !== $color_accent ) ? sprintf( '

		button::focus,
		button::hover,
		input:focus[type="button"],
		input:focus[type="reset"],
		input:focus[type="submit"],
		input:hover[type="button"],
		input:hover[type="reset"],
		input:hover[type="submit"],
		.archive-pagination li a::focus,
		.archive-pagination li a::hover,
		.archive-pagination .active a,
		.button::focus,
		.button::hover,
		.sidebar .enews-widget input[type="submit"] {
			background-color: %s;
			color: %s;
		}
		', $color_accent, genesis_sample_color_contrast( $color_accent ) ) : '';

	$woo_css .= ( genesis_sample_customizer_get_default_accent_color() !== $color_accent ) ? sprintf( '
		.woocommerce a.button::hover,
		.woocommerce a.button::focus,
		.woocommerce a.button.alt::hover,
		.woocommerce a.button.alt::focus,
		.woocommerce button.button::hover,
		.woocommerce button.button::focus,
		.woocommerce button.button.alt::hover,
		.woocommerce button.button.alt::focus,
		.woocommerce input.button::hover,
		.woocommerce input.button::focus,
		.woocommerce input.button.alt::hover,
		.woocommerce input.button.alt::focus,
		.woocommerce input:hover[type="submit"],
		.woocommerce span.onsale,
		.woocommerce #respond input#submit::hover,
		.woocommerce #respond input#submit::focus,
		.woocommerce #respond input#submit.alt::hover,
		.woocommerce #respond input#submit.alt::focus,
		.woocommerce-error::before,
		.woocommerce-info::before,
		.woocommerce-message::before,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-range {
			background-color: %1$s;
			color: %2$s;
		}

		.woocommerce-error,
		.woocommerce-info,
		.woocommerce-message {
			border-top-color: %1$s;
		}

	', $color_accent, genesis_sample_color_contrast( $color_accent ) ) : '';

	if ( $css ) {
		wp_add_inline_style( $handle, $css );
	}

	if ( $woo_css ) {
		wp_add_inline_style( 'genesis-sample-woocommerce-styles', $woo_css );
	}

}
