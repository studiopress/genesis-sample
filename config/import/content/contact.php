<?php
/**
 * Genesis Sample.
 *
 * Contact page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

if ( function_exists( 'wpforms' ) ) {
	$form_id = wpforms()->form->add(
		'Simple Contact Form',
		array(),
		array(
		    'template' => 'contact',
		)
	);

	if ( $form_id ) {
		return "<!-- wp:wpforms/form-selector {\"formId\":\"{$form_id}\"} /-->";
	}
}

return <<<CONTENT
<!-- wp:paragraph -->
<p>Add a contact form to this page with the pre-installed WPForms Lite plugin (Third Party). Learn <a href="https://my.studiopress.com/documentation/wpforms/plugin-usage/create-contact-forms-with-wpforms/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">how to create a form using WPForms</a>.</p>
<!-- /wp:paragraph -->
CONTENT;
