/**
 * Trigger AJAX request to save state when the WooCommerce notice is dismissed.
 *
 * @version 2.3.0
 *
 * @author StudioPress
 * @license GPL-2.0-or-later
 * @package GenesisSample
 */

jQuery( document ).on(
	'click', '.genuflex-woocommerce-notice .notice-dismiss',
	function () {

		jQuery.ajax( {
			url: ajaxurl,
			data: {
				action: 'genuflex_dismiss_woocommerce_notice'
			}
		} );

	}
);
