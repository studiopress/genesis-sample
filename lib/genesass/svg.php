<?php
/**
 * Allow SVG uploads and enable thumbnails in Media Library.
 *
 * @package Genesass
 */

// Security Check: Prevent this file being executed outside the WordPress context.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}


/**
 * Add SVG to the allowed mime types in the Media Library.
 *
 * Uses the filter `upload_mimes` to filter the list of allowed mime types and
 * file extensions.
 *
 * @link https://developer.wordpress.org/reference/hooks/upload_mimes/
 *
 * @param array $mimes Mime types keyed by the file extension regex corresponding to those types.
 */
function genesass_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'genesass_mime_types' );



/**
 *
 * `wp_check_filetype_and_ext` attemps to determine the real file type of a file.
 * If unable to, the file name extension will be used to determine type.
 */
function genesass_verify_filetype( $data, $file, $filename, $mimes ) {
	$filetype = wp_check_filetype( $filename, $mimes );

	return array(
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename'],
	);

}
add_filter( 'wp_check_filetype_and_ext', 'genesass_verify_filetype', 10, 4 );


/**
 * Enable thumbnails for SVG images in the Media Library
 *
 * This built-in WordPress function prepares an attachment post object for JS,
 * where it is expected to be JSON-encoded and fit into an Attachment model.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_prepare_attachment_for_js/
 *
 * @param $response
 * @param int|WP_Post $attachment Required. Attachment ID or object.
 * @param $meta
 *
 * @return array|void Array of attachment details, or void if the parameter does not correspond to an attachment.
 */
function genesass_svg_media_thumbnails( $response, $attachment, $meta ) {
	// If the response is an SVG Image, and the PHP class SimpleXML exists.
	if ( 'image' === $response['type'] && 'svg+xml' === $response['subtype'] && class_exists( 'SimpleXMLElement' ) ) {
		try {
			$path = get_attached_file( $attachment->ID );
			if ( @file_exists( $path ) ) {
				$svg    = new SimpleXMLElement( @file_get_contents( $path ) );
				$src    = $response['url'];
				$width  = (int) $svg['width'];
				$height = (int) $svg['height'];

				// media gallery.
				$response['image'] = compact( 'src', 'width', 'height' );
				$response['thumb'] = compact( 'src', 'width', 'height' );

				// media single.
				$response['sizes']['full'] = array(
					'height'      => $height,
					'width'       => $width,
					'url'         => $src,
					'orientation' => $height > $width ? 'portrait' : 'landscape',
				);
			}
		} catch ( Exception $e ) {
		}
	}

	return $response;
}
add_filter( 'wp_prepare_attachment_for_js', 'genesass_svg_media_thumbnails', 10, 3 );
