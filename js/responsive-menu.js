/**
 * This script adds the accessibility-ready responsive menu to the Genesis Sample theme.
 *
 * @package Genesis Sample\JS
 * @author StudioPress
 * @license GPL-2.0+
 */

var genesisMenuParams = typeof genesis_responsive_menu === 'undefined' ? '' : genesis_responsive_menu,
	genesisMenus      = genesisMenuParams.menuClasses;


( function ( document, $, undefined ) {

	$( 'body' ).addClass( 'js' );

	'use strict';

	var genesisMenu         = {},
		mainMenuButtonClass = 'menu-toggle',
		subMenuButtonClass  = 'sub-menu-toggle',
		responsiveMenuClass = '.genesis-responsive-menu';

	genesisMenu.init = function() {
		var $primaryMenu      = $( genesisMenus.primary ),
			$secondaryMenu    = $( genesisMenus.secondary ),
			menuIconClass     = typeof genesisMenuParams.menuIconClass !== 'undefined' ? genesisMenuParams.menuIconClass : 'dashicons-before dashicons-menu',
			subMenuIconClass  = typeof genesisMenuParams.subMenuIconClass !== 'undefined' ? genesisMenuParams.subMenuIconClass : 'dashicons-before dashicons-arrow-down',
			toggleButtons     = {
			menu : $( '<button />', {
				'class' : mainMenuButtonClass,
				'aria-expanded' : false,
				'aria-pressed' : false,
				'role' : 'button'
				} )
				.append( genesisMenuParams.mainMenu ),
			submenu : $( '<button />', {
				'class' : subMenuButtonClass,
				'aria-expanded' : false,
				'aria-pressed' : false,
				'role' : 'button'
				} )
				.append( $( '<span />', {
					'class' : 'screen-reader-text',
					text : genesisMenuParams.subMenu
				} ) )
		};

		if ( $primaryMenu.length > 0 ) {
			$primaryMenu.before( toggleButtons.menu ); // Add the main nav buttons.
			$primaryMenu.find( '.sub-menu' ).before( toggleButtons.submenu ); // Add the submenu nav buttons.
		} else if ( $secondaryMenu.length > 0 ) {
			$secondaryMenu.before( toggleButtons.menu ); // Add the main nav buttons.
			$secondaryMenu.find( '.sub-menu' ).before( toggleButtons.submenu ); // Add the submenu nav buttons.
		}

		$( '.' + mainMenuButtonClass ).addClass( menuIconClass );
		$( '.' + subMenuButtonClass ).addClass( subMenuIconClass );
		$( '.' + mainMenuButtonClass )
			.on( 'click.genesisMenu-mainbutton', _mainmenuToggle )
			.each( _addClassID );
		$( '.' + subMenuButtonClass ).on( 'click.genesisMenu-subbutton', _submenuToggle );
		$( window ).on( 'resize.genesisMenu', _doResize ).triggerHandler( 'resize.genesisMenu' );
	};

	/**
	 * Execute our responsive menu functions on window resizing.
	 */
	function _doResize() {
		var buttons   = $( 'button[id^="mobile-"]' ).attr( 'id' );
		if ( typeof buttons === 'undefined' ) {
			return;
		}
		_responsiveMenuClass( buttons );
		_superfishToggle( buttons );
		_changeSkipLink( buttons );
		_maybeClose( buttons );
		_combineMenus( buttons );
	}

	/**
	 * Add nav class and ID to related button.
	 */
	function _addClassID() {
		var $this = $( this ),
			nav   = $this.next( 'nav' ),
			id    = 'class';
		if ( $( nav ).attr( 'id' ) ) {
			id = 'id';
		}
		$this.attr( 'id', 'mobile-' + $( nav ).attr( id ) );
	}
	
	/**
	 * Combine our menus if the mobile menu is visible.
	 * @params buttons
	 */
	function _combineMenus( buttons ){
		if ( $( genesisMenus.primary ).length === 0 || $( genesisMenus.secondary ).length === 0 ) {
			return;
		}
		
		if ( 'none' !== _getDisplayValue( buttons ) ) {
			$( genesisMenus.secondary + ' .menu > li' ).addClass( 'moved-item-secondary' ).appendTo( responsiveMenuClass + ' ul.genesis-nav-menu' );
			$( genesisMenus.secondary ).hide();
		} else {
			$( genesisMenus.secondary ).show();
			$( genesisMenus.primary + ' ul.genesis-nav-menu > li.moved-item-secondary' ).appendTo( genesisMenus.secondary + ' .menu' );
			$( genesisMenus.secondary + ' .menu > li' ).removeClass( 'moved-item-secondary' );
		}
	}

	/**
	 * Action to happen when the main menu button is clicked.
	 */
	function _mainmenuToggle() {
		var $this = $( this );
		_toggleAria( $this, 'aria-pressed' );
		_toggleAria( $this, 'aria-expanded' );
		$this.toggleClass( 'activated' );
		$this.next( 'nav' ).slideToggle( 'fast' );
	}

	/**
	 * Action for submenu toggles.
	 */
	function _submenuToggle() {

		var $this  = $( this ),
			others = $this.closest( '.menu-item' ).siblings();
		_toggleAria( $this, 'aria-pressed' );
		_toggleAria( $this, 'aria-expanded' );
		$this.toggleClass( 'activated' );
		$this.next( '.sub-menu' ).slideToggle( 'fast' );

		others.find( '.' + subMenuButtonClass ).removeClass( 'activated' ).attr( 'aria-pressed', 'false' );
		others.find( '.sub-menu' ).slideUp( 'fast' );

	}

	/**
	 * Activate/deactivate superfish.
	 * @params buttons
	 */
	function _superfishToggle( buttons ) {
		var _superfish = $( genesisMenus.primary + ' .js-superfish' ),
			$args      = 'destroy';
		if ( typeof _superfish.superfish !== 'function' ) {
			return;
		}
		if ( 'none' === _getDisplayValue( buttons ) ) {
			$args = {
				'delay': 100,
				'animation': {'opacity': 'show', 'height': 'show'},
				'dropShadows': false,
				'speed': 'fast'
			};
		}
		_superfish.superfish( $args );
	}

	/**
	 * Modify skip link to match mobile buttons.
	 * @param buttons
	 */
	function _changeSkipLink( buttons ) {
		var startLink = 'genesis-nav',
			endLink   = 'mobile-genesis-nav';
		if ( 'none' === _getDisplayValue( buttons ) ) {
			startLink = 'mobile-genesis-nav';
			endLink   = 'genesis-nav';
		}
		$( '.genesis-skip-link a[href^="#' + startLink + '"]' ).each( function() {
			var link = $( this ).attr( 'href' );
			link = link.replace( startLink, endLink );
			$( this ).attr( 'href', link );
		});
	}

	/**
	 * Close all the menu toggles if buttons are hidden.
	 * @param buttons
	 */
	function _maybeClose( buttons ) {
		if ( 'none' !== _getDisplayValue( buttons ) ) {
			return;
		}
		$( '.' + mainMenuButtonClass + ', ' + genesisMenus.primary + ' .sub-menu-toggle' )
			.removeClass( 'activated' )
			.attr( 'aria-expanded', false )
			.attr( 'aria-pressed', false );
		$( genesisMenus.primary + ', ' + genesisMenus.primary + ' .sub-menu' )
			.attr( 'style', '' );
	}

	/**
	 * Add a class to the responsive menu.
	 * @param buttons
	 */
	function _responsiveMenuClass( buttons ) {
		if ( 'none' !== _getDisplayValue( buttons ) ) {
			$( genesisMenus.primary ).addClass( responsiveMenuClass.replace( '.', '' ) );
		} else {
			$( genesisMenus.primary ).removeClass( responsiveMenuClass.replace( '.', '' ) );
		}
	}

	/**
	 * Generic function to get the display value of an element.
	 * @param  {id} $id ID to check
	 * @return {string}     CSS value of display property
	 */
	function _getDisplayValue( $id ) {
		var element = document.getElementById( $id ),
			style   = window.getComputedStyle( element );
		return style.getPropertyValue( 'display' );
	}

	/**
	 * Toggle aria attributes.
	 * @param  {button} $this     passed through
	 * @param  {aria-xx} attribute aria attribute to toggle
	 * @return {bool}           from _ariaReturn
	 */
	function _toggleAria( $this, attribute ) {
		$this.attr( attribute, function( index, value ) {
			return 'false' === value;
		});
	}

	$(document).ready(function () {

		if ( typeof genesisMenuParams !== 'undefined' ) {

			genesisMenu.init();
		
		}

	});

})( document, jQuery );