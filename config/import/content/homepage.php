<?php
/**
 * Genesis Sample.
 *
 * Homepage content optionally installed after theme activation.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Photo by Shashank Sahay on Unsplash: https://unsplash.com/photos/vwJFEkK8Kcs
$genesis_homepage_cta_image_url = get_stylesheet_directory_uri() . '/config/import/images/shashank-sahay-272123-unsplash.jpg';

$genesis_sample_homepage_content = <<<CONTENT
<!-- wp:atomic-blocks/ab-cta {"buttonText":"Call to action","ctaTitleFontSize":48,"ctaWidth":"full","ctaTextColor":"#f5f5f5","imgID":122,"dimRatio":100} -->
<div style="background-color:#f2f2f2;text-align:center" class="wp-block-atomic-blocks-ab-cta alignfull ab-block-cta ab-font-size-20"><div class="ab-cta-image-wrap"><img class="ab-cta-image has-background-dim-100 has-background-dim" src="$genesis_homepage_cta_image_url" alt=""/></div><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-48" style="color:#f5f5f5">Enter Your Homepage Title</h2><div class="ab-cta-text ab-font-size-20" style="color:#f5f5f5"><p>Enter your homepage intro.</p></div></div><div class="ab-cta-button"><a href="https://example.com/" target="_self" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Call to action</a></div></div>
<!-- /wp:atomic-blocks/ab-cta -->

<!-- wp:atomic-blocks/ab-drop-cap {"dropCapFontSize":1,"dropCapStyle":"ab-drop-cap-square"} -->
<div style="color:#32373c" class="wp-block-atomic-blocks-ab-drop-cap ab-drop-cap-square ab-font-size-1 ab-block-drop-cap"><div class="ab-drop-cap-text"><p>Genesis Sample 2.8.0 brings support for a block-based homepage, automatic homepage setup with the Onboarding feature from Genesis 2.8.0, and styling for Atomic Blocks. To use it, you’ll need WordPress 5.0+ and Genesis 2.8.0+.</p></div></div>
<!-- /wp:atomic-blocks/ab-drop-cap -->

<!-- wp:paragraph -->
<p>Genesis Sample is also optimized with support for special features of the Gutenberg editor. This includes wide and full-width content blocks, block styling, custom colors, custom font sizes, and back end editor styling that matches the front end of your site.</p>
<!-- /wp:paragraph -->
CONTENT;

return $genesis_sample_homepage_content;
