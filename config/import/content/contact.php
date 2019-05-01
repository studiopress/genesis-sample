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

// Requires helper WPForms function to create a new form.
require_once get_stylesheet_directory() . '/lib/wpforms.php';

// Swaps the default content below with a WPForms contact form block if the WPForms plugin is active.
add_action( 'genesis_onboarding_after_import_content', 'studiopress_insert_contact_form', 10, 2 );

return <<<CONTENT
<!-- wp:paragraph -->
<p>Add a contact form to this page with the WPForms Lite plugin (Third Party). Learn <a href="https://my.studiopress.com/documentation/wpforms/plugin-usage/create-contact-forms-with-wpforms/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">how to create a form using WPForms</a>.</p>
<!-- /wp:paragraph -->
CONTENT;
