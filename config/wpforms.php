<?php
/**
 * Genesis Sample WPForms settings.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-sample/
 */

/**
 * WPForms settings to use when creating a form during one-click theme setup.
 */
return array(
	'field_id' => '3',
	'fields'   => array(
		'0' => array(
			'id'       => '0',
			'type'     => 'name',
			'label'    => esc_html__( 'Name', 'genesis-sample' ),
			'required' => '1',
			'size'     => 'large',
		),
		'1' => array(
			'id'       => '1',
			'type'     => 'email',
			'label'    => esc_html__( 'Email', 'genesis-sample' ),
			'required' => '1',
			'size'     => 'large',
		),
		'2' => array(
			'id'          => '2',
			'type'        => 'textarea',
			'label'       => esc_html__( 'Comment or Message', 'genesis-sample' ),
			'description' => '',
			'required'    => '1',
			'size'        => 'medium',
			'placeholder' => '',
			'css'         => '',
		),
	),
	'settings' => array(
		'form_title'                  => esc_html__( 'Simple Contact Form', 'genesis-sample' ),
		'notifications'               => array(
			'1' => array(
				'email'          => '{admin_email}',
				'subject'        => esc_html__( 'Contact Form Submission', 'genesis-sample' ),
				'replyto'        => '{field_id="1"}',
				'sender_name'    => '{field_id="0"}',
				'sender_address' => '{admin_email}',
				'message'        => '{all_fields}',
			),
		),
		'honeypot'                    => '1',
		'confirmation_message_scroll' => '1',
		'submit_text'                 => 'Submit',
		'submit_text_processing'      => esc_html__( 'Sending...', 'genesis-sample' ),
	),
);
