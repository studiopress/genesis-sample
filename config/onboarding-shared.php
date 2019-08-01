<?php
/**
 * Genesis Sample.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return array(
	'plugins'          => array(
		array(
			'name'       => __( 'Atomic Blocks', 'genesis-sample' ),
			'slug'       => 'atomic-blocks/atomicblocks.php',
			'public_url' => 'https://atomicblocks.com/',
		),
		array(
			'name'       => __( 'Simple Social Icons', 'genesis-sample' ),
			'slug'       => 'simple-social-icons/simple-social-icons.php',
			'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
		),
		array(
			'name'       => __( 'Genesis eNews Extended (Third Party)', 'genesis-sample' ),
			'slug'       => 'genesis-enews-extended/plugin.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
		),
		array(
			'name'       => __( 'WPForms Lite (Third Party)', 'genesis-sample' ),
			'slug'       => 'wpforms-lite/wpforms.php',
			'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
		),
	),
	'content'          => array(
		'blocks'  => array(
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array( '_genesis_layout' => 'full-width-content' ),
		),
		'about'   => array(
			'post_title'     => 'About Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/about.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array( '_genesis_layout' => 'full-width-content' ),
		),
		'contact' => array(
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'landing' => array(
			'post_title'     => 'Landing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/landing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
	),
	'navigation_menus' => array(
		'primary' => array(
			'homepage' => array(
				'title' => 'Home',
			),
			'about'    => array(
				'title' => 'About Us',
			),
			'contact'  => array(
				'title' => 'Contact Us',
			),
			'blocks'   => array(
				'title' => 'Block Examples',
			),
			'landing'  => array(
				'title' => 'Landing Page',
			),
		),
	),
	'widgets'          => array(
		'footer-1' => array(
			array(
				'type' => 'text',
				'args' => array(
					'title'  => 'Design',
					'text'   => '<p>With an emphasis on typography, white space, and mobile-optimized design, your website will look absolutely breathtaking.</p><p><a href="#">Learn more about design</a>.</p>',
					'filter' => 1,
					'visual' => 1,
				),
			),
		),
		'footer-2' => array(
			array(
				'type' => 'text',
				'args' => array(
					'title'  => 'Content',
					'text'   => '<p>Our team will teach you the art of writing audience-focused content that will help you achieve the success you truly deserve.</p><p><a href="#">Learn more about content</a>.</p>',
					'filter' => 1,
					'visual' => 1,
				),
			),
		),
		'footer-3' => array(
			array(
				'type' => 'text',
				'args' => array(
					'title'  => 'Strategy',
					'text'   => '<p>We help creative entrepreneurs build their digital business by focusing on three key elements of a successful online platform.</p><p><a href="#">Learn more about strategy</a>.</p>',
					'filter' => 1,
					'visual' => 1,
				),
			),
		),
	),
);
