<?php
/**
 * Genesis Sample.
 *
 * Contact page content optionally installed after theme activation.
 * Will create a form with WPForms and embed on the page as a WPForms block.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Requires the helper function to get the WPForms form ID.
require_once get_stylesheet_directory() . '/lib/wpforms.php';

$genesis_sample_wpforms_id = studiopress_get_wpforms_id();

if ( $genesis_sample_wpforms_id ) {
	return "<!-- wp:wpforms/form-selector {\"formId\":\"{$genesis_sample_wpforms_id}\"} /-->";
}

return <<<CONTENT
<!-- wp:paragraph -->
<p>Add a contact form to this page with the WPForms Lite plugin (Third Party). Learn <a href="https://my.studiopress.com/documentation/wpforms/plugin-usage/create-contact-forms-with-wpforms/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">how to create a form using WPForms</a>.</p>
<!-- /wp:paragraph -->
CONTENT;
