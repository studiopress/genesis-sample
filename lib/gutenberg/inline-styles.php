<?php
/**
 * Adds front-end inline styles for the custom Gutenberg color palette.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'wp_enqueue_scripts', 'genesis_sample_custom_gutenberg_css' );
/**
 * Outputs front-end inline styles based on colors declared in config/block-editor-settings.php.
 *
 * @since 2.9.0
 */
function genesis_sample_custom_gutenberg_css() {

	$block_editor_settings = genesis_get_config( 'block-editor-settings' );

	$css = <<<CSS
.ab-block-post-grid .ab-post-grid-items h2 a:hover {
	color: {$block_editor_settings['default-link-color']};
}

.site-container .wp-block-button .wp-block-button__link {
	background-color: {$block_editor_settings['default-link-color']};
}

.wp-block-button .wp-block-button__link:not(.has-background),
.wp-block-button .wp-block-button__link:not(.has-background):focus,
.wp-block-button .wp-block-button__link:not(.has-background):hover {
	color: {$block_editor_settings['default-button-color']};
}

.site-container .wp-block-button.is-style-outline .wp-block-button__link {
	color: {$block_editor_settings['default-button-bg']};
}

.site-container .wp-block-button.is-style-outline .wp-block-button__link:focus,
.site-container .wp-block-button.is-style-outline .wp-block-button__link:hover {
	color: {$block_editor_settings['default-button-outline-hover']};
}
CSS;

	$css .= genesis_sample_inline_font_sizes();
	$css .= genesis_sample_inline_color_palette();

	wp_add_inline_style( CHILD_THEME_HANDLE . '-gutenberg', $css );

}

add_action( 'enqueue_block_editor_assets', 'genesis_sample_custom_gutenberg_admin_css' );
/**
 * Outputs back-end inline styles based on colors declared in config/block-editor-settings.php.
 *
 * Note this will appear before the style-editor.css injected by JavaScript,
 * so overrides will need to have higher specificity.
 *
 * @since 2.9.0
 */
function genesis_sample_custom_gutenberg_admin_css() {

	$block_editor_settings = genesis_get_config( 'block-editor-settings' );

	$css = <<<CSS
.ab-block-post-grid .ab-post-grid-items h2 a:hover,
.block-editor__container .editor-block-list__block a {
	color: {$block_editor_settings['default-link-color']};
}

.editor-styles-wrapper .editor-rich-text .button,
.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background) {
	background-color: {$block_editor_settings['default-button-bg']};
	color: {$block_editor_settings['default-button-color']};
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link {
	color: {$block_editor_settings['default-button-bg']};
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:focus,
.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:hover {
	color: {$block_editor_settings['default-button-outline-hover']};
}
CSS;

	wp_add_inline_style( 'genesis-sample-gutenberg-fonts', $css );

}

/**
 * Generate CSS for editor font sizes from the provided theme support.
 *
 * @since 2.9.0
 *
 * @return string The CSS for editor font sizes if theme support was declared.
 */
function genesis_sample_inline_font_sizes() {

	$css               = '';
	$editor_font_sizes = get_theme_support( 'editor-font-sizes' );

	if ( ! $editor_font_sizes ) {
		return '';
	}

	foreach ( $editor_font_sizes[0] as $font_size ) {
		$css .= <<<CSS
		.site-container .has-{$font_size['slug']}-font-size {
			font-size: {$font_size['size']}px;
		}
CSS;
	}

	return $css;

}

/**
 * Generate CSS for editor colors based on theme color palette support.
 *
 * @since 2.9.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function genesis_sample_inline_color_palette() {

	$css                   = '';
	$block_editor_settings = genesis_get_config( 'block-editor-settings' );
	$editor_color_palette  = $block_editor_settings['editor-color-palette'];

	foreach ( $editor_color_palette as $color_info ) {
		$css .= <<<CSS
		.site-container .has-{$color_info['slug']}-color,
		.site-container .wp-block-button .wp-block-button__link.has-{$color_info['slug']}-color,
		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-color {
			color: {$color_info['color']};
		}

		.site-container .has-{$color_info['slug']}-background-color,
		.site-container .wp-block-button .wp-block-button__link.has-{$color_info['slug']}-background-color,
		.site-container .wp-block-pullquote.is-style-solid-color.has-{$color_info['slug']}-background-color {
			background-color: {$color_info['color']};
		}
CSS;
	}

	return $css;

}
