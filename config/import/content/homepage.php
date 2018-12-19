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
<!-- wp:cover {"url":"$genesis_homepage_cta_image_url","align":"full","id":122} -->
<div class="wp-block-cover has-background-dim alignfull" style="background-image:url($genesis_homepage_cta_image_url)"><p class="wp-block-cover-text">Enter your homepage title</p></div>
<!-- /wp:cover -->

<!-- wp:atomic-blocks/ab-post-grid {"postsToShow":3,"displayPostDate":false,"displayPostAuthor":false,"columns":3,"align":"wide"} /-->

<!-- wp:atomic-blocks/ab-cta {"buttonText":"Learn more","ctaWidth":"full","ctaBackgroundColor":"#202020","ctaTextColor":"#f5f5f5"} -->
<div style="background-color:#202020;text-align:center" class="wp-block-atomic-blocks-ab-cta alignfull ab-block-cta ab-font-size-20"><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-32" style="color:#f5f5f5">Enter your title here</h2><div class="ab-cta-text ab-font-size-20" style="color:#f5f5f5"><p>Some text to support the title.</p></div></div><div class="ab-cta-button"><a href="https://example.com" target="_self" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Learn more</a></div></div>
<!-- /wp:atomic-blocks/ab-cta -->

CONTENT;

return $genesis_sample_homepage_content;
