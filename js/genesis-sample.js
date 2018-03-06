/**
 * Genesis Sample entry point.
 *
 * @package GenesisSample\JS
 * @author  StudioPress
 * @license GPL-2.0+
 */

var genesisSample = ( function( $ ) {
	'use strict';

	/**
	 * Adjust site inner margin top to compensate for sticky header height.
	 *
	 * @since 2.6.0
	 */
	var moveContentBelowFixedHeader = function() {
		var siteInnerMarginTop = 0;

		if( $('.site-header').css('position') === 'fixed' ) {
			siteInnerMarginTop = $('.site-header').outerHeight();
		}

		$('.site-inner').css('margin-top', siteInnerMarginTop);
	},

	/** Make videos fit the full container width without losing their ratio.
	 *
	 * @since 2.7.0
	 */
	correctVideoWidths = function() {
		$(".site-container").fitVids();
	},

	/**
	 * Initialize Genesis Sample.
	 *
	 * Internal functions to execute on full page load.
	 *
	 * @since 2.6.0
	 */
	load = function() {
		moveContentBelowFixedHeader();

		$( window ).resize(function() {
			moveContentBelowFixedHeader();
		});

		// Run after the Customizer updates.
		// 1.5s delay is to allow logo area reflow.
		if (typeof wp.customize != "undefined") {
			wp.customize.bind( 'change', function ( setting ) {
				setTimeout(function() {
					moveContentBelowFixedHeader();
				  }, 1500);
			});
		}
	},

	/**
	 * Functions to execute on document ready.
	 *
	 * @since 2.7.0
	 */
	ready = function() {
		correctVideoWidths();
	};

	// Expose the load and ready functions.
	return {
		load: load,
		ready: ready
	};

})( jQuery );

jQuery( window ).on( 'load', genesisSample.load );
jQuery( genesisSample.ready );
