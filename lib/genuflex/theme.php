<?php
/**
 * Genuflex Customisations.
 *
 * @package Genuflex
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://github.com/gillespieza/genesass-and-genuflex/
 */

/** Add Google Analytics to top of <body> if user is not admin. */
function genuflex_add_google_analytics() {
	if ( ! current_user_can( 'manage_options' ) ) {
		echo "
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src='https://www.googletagmanager.com/gtag/js?id=G-XXXXXX'></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-XXXXX-1', {'anonymize_ip':true});
			gtag('config', 'G-XXXX');
		</script>
		";
	} else {
		echo '
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<!-- Disabled: admin user is logged in-->

		';
	}
}
add_action( 'genesis_before', 'genuflex_add_google_analytics' );


if ( ! function_exists( 'genuflex_mute_jquery_migrator' ) ) {
	/** Set Jquery Migrate on Mute so you don't have such a cluttered console */
	function genuflex_mute_jquery_migrator() {
		echo '<script>jQuery.migrateMute = true;</script>';
	}
}
add_action( 'wp_head', 'genuflex_mute_jquery_migrator' );
add_action( 'admin_head', 'genuflex_mute_jquery_migrator' );

