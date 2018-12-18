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

CONTENT;

return $genesis_sample_homepage_content;
