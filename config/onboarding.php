<?php
/**
 * Genesis Sample.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return array(
	'dependencies' => array(
		'plugins' => array(
			array(
				'name' => __( 'Atomic Blocks', 'genesis-sample' ),
				'slug' => 'atomic-blocks/atomicblocks.php',
			),
			array(
				'name'       => __( 'WP Forms Lite', 'genesis-sample' ),
				'slug'       => 'wpforms-lite/wpforms.php',
				'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
			),
			array(
				'name'       => __( 'Genesis eNews Extended', 'genesis-sample' ),
				'slug'       => 'genesis-enews-extended/plugin.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
			),
			array(
				'name'       => __( 'Simple Social Icons', 'genesis-sample' ),
				'slug'       => 'simple-social-icons/simple-social-icons.php',
				'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
			),
		),
	),
	'content'      => array(
		'homepage' => array(
			'post_title'     => 'Homepage',
			'post_name'      => 'homepage-gutenberg',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/homepage.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
	),
);
