<?php
/**
 * Genesis Sample child theme.
 *
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-sample/
 */

// Pull default layouts from Genesis
$genesis_config = genesis_get_config( 'layouts', 'secondary' );

/**
 * The Layouts config. Sets the default layouts for use by Genesis.
 *
 * @since 2.8.0
 */
return array(
	'content-sidebar'    => $config['content-sidebar'],
	'sidebar-content'    => $config['sidebar-content'],
	'full-width-content' => $config['full-width-content'],
);
