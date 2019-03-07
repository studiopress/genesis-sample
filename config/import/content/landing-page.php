<?php
/**
 * Genesis sample.
 *
 * Landing page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Photo by Felipe Dolce on Unsplash.
$genesis_sample_landing_image_url = CHILD_URL . '/config/import/images/landing.jpg';

return <<<CONTENT
<!-- wp:image {"id":1377} -->
<figure class="wp-block-image"><img src="$genesis_sample_landing_image_url" alt="Paris" class="wp-image-1377"/><figcaption> Photo by <a href="https://unsplash.com/photos/Pi3YUQivm6o" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Felipe Dolce</a> on <a href="https://unsplash.com/">Unsplash</a> </figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>“There are only two places in the world where we can live happy: at home and in Paris.”<br></p><cite>— Ernest Hemingway</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4} -->
<h4>This is a Sample Heading</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Here’s a sample paragraph with a custom background color:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"customBackgroundColor":"#f5f5f5"} -->
<p style="background-color:#f5f5f5" class="has-background">This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind. This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->
CONTENT;
