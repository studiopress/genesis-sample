<?php
/**
 * Genesis Sample theme settings.
 *
 * Genesis 2.9+ updates these settings when themes are activated.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return [
	GENESIS_SETTINGS_FIELD => [
		'blog_cat_num'              => 6,
		'breadcrumb_home'           => 0,
		'breadcrumb_front_page'     => 0,
		'breadcrumb_posts_page'     => 0,
		'breadcrumb_single'         => 0,
		'breadcrumb_page'           => 0,
		'breadcrumb_archive'        => 0,
		'breadcrumb_404'            => 0,
		'breadcrumb_attachment'     => 0,
		'content_archive'           => 'full',
		'content_archive_limit'     => 0,
		'content_archive_thumbnail' => 0,
		'entry_meta_after_content'  => '[post_categories] [post_tags]',
		'entry_meta_before_content' => '[post_date] ' . __( 'by', 'genesis-sample' ) . ' [post_author_posts_link] [post_comments] [post_edit]',
		'image_size'                => 'genesis-singular-images',
		'image_alignment'           => 'aligncenter',
		'posts_nav'                 => 'numeric',
		'site_layout'               => 'content-sidebar',
	],
	'posts_per_page'       => 6,
];
