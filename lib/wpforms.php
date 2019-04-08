<?php
/**
 * StudioPress WPForms helper functions.
 *
 * Adds a form during one-click theme setup, or returns existing forms ID.
 *
 * @package StudioPress
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

/**
 * Gets the ID of the WPForms form created during previous StudioPress one-click theme setup, if one exists.
 *
 * Creates a new form and returns that form's ID if there is no existing form, and `$create_new` is true.
 *
 * @since 2.10.0
 *
 * @param bool $create_new Create a form if no form ID exists and return the ID of that form.
 * @return int|null The ID of the form, or null if WPForms is inactive or form creation failed.
 */
function studiopress_get_wpforms_id( $create_new = true ) { // phpcs:ignore -- studiopress prefix for functions shared between themes.

	if ( ! function_exists( 'wpforms' ) ) {
		return;
	}

	$form_id = get_option( 'genesis_onboarding_wpforms_id' );
	$wpform  = get_post( $form_id );

	if ( $wpform && 'wpforms' === $wpform->post_type ) {
		return $form_id;
	} else {
		delete_option( 'genesis_onboarding_wpforms_id' ); // Stored ID no longer points to a WPForms form.
	}

	if ( $create_new ) {
		return studiopress_create_wpforms_form();
	}

}

/**
 * Creates a WPForms form.
 *
 * A `wpforms.php` config file must exist in the theme's config folder.
 *
 * @since 2.10.0
 *
 * @return int|null The form/post ID, or null if no form was created or form config is missing.
 */
function studiopress_create_wpforms_form() { // phpcs:ignore -- studiopress prefix for functions shared between themes.

	if ( ! function_exists( 'wpforms' ) ) {
		return;
	}

	$wpforms_data = genesis_get_config( 'wpforms' );

	if ( ! $wpforms_data ) {
		return;
	}

	// Creates an empty form so we have an ID to work with.
	$form_id = wp_insert_post(
		array(
			'post_status' => 'publish',
			'post_type'   => 'wpforms',
		)
	);

	$wpforms_data['id'] = $form_id; // WPForms expects the ID in the form's post content.

	$wpforms_updated = wpforms()->form->update( $form_id, $wpforms_data );

	if ( $form_id && $wpforms_updated ) {
		update_option( 'genesis_onboarding_wpforms_id', $form_id, false );
		return $form_id;
	}

}
