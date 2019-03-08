<?php
/**
 * Genesis Sample.
 *
 * This file adds the default theme settings to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_filter( 'genesis_theme_settings_defaults', 'genesis_sample_theme_defaults' );
/**
 * Updates theme settings when resetting them at Genesis -> Theme Settings.
 *
 * Can be removed when Genesis Theme Settings are removed from WP admin.
 *
 * @since 2.2.3
 *
 * @param array $defaults Original theme settings defaults.
 * @return array Modified defaults.
 */
function genesis_sample_theme_defaults( $defaults ) {

	$args = genesis_get_config( 'child-theme-settings-genesis' );

	return wp_parse_args( $args, $defaults );

}

add_filter( 'simple_social_default_styles', 'genesis_sample_social_default_styles' );
/**
 * Set Simple Social Icon defaults.
 *
 * @since 1.0.0
 *
 * @param array $defaults Social style defaults.
 * @return array Modified social style defaults.
 */
function genesis_sample_social_default_styles( $defaults ) {

	$args = genesis_get_config( 'simple-social-icons-settings' );

	return wp_parse_args( $args, $defaults );

}
