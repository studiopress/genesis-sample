<?php
/**
 * Genuflex.
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Genuflex
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://github.com/gillespieza/genesass-and-genuflex/
 */

// Photo by Fabrice Villard on Unsplash.
$genuflex_about_image_url = CHILD_URL . '/config/import/images/about.jpg';

return <<<CONTENT
<!-- wp:image {"id":2141,"align":"center"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="$genuflex_about_image_url" alt="" class="wp-image-2141"/></figure></div>
<!-- /wp:image -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":29} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:29px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:columns -->
<div class="wp-block-columns has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Hello! We are StudioPress, and  we build themes with an emphasis on typography, white space, and   mobile-optimized design to make your website look absolutely   breathtaking.  </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"right"} -->
<h2 style="text-align:right" id="mce_9">Contact Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right"> 555.555.5555</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right">
1234 Block Blvd.<br>San Francisco, CA 94120

</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
CONTENT;
