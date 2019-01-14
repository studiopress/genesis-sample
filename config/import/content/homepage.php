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

// Photo by Haley Powers on Unspash: https://unsplash.com/photos/rjhvXX7JBPc
$genesis_homepage_faq_image_url = CHILD_URL . '/config/import/images/uninvited-haley-powers-unsplash.jpg';

$genesis_sample_homepage_content = <<<CONTENT
<!-- wp:cover {"url":"$genesis_homepage_cta_image_url","align":"full","id":122} -->
<div class="wp-block-cover has-background-dim alignfull" style="background-image:url($genesis_homepage_cta_image_url)"><p class="wp-block-cover-text">Enter your homepage title</p></div>
<!-- /wp:cover -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":25} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:25px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-post-grid {"postsToShow":3,"displayPostDate":false,"displayPostAuthor":false,"columns":3,"align":"wide"} /-->

<!-- wp:atomic-blocks/ab-cta {"buttonText":"Learn more","ctaWidth":"full","ctaBackgroundColor":"#333333","ctaTextColor":"#f5f5f5"} -->
<div style="background-color:#333333;text-align:center" class="wp-block-atomic-blocks-ab-cta alignfull ab-block-cta ab-font-size-20"><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-32" style="color:#f5f5f5">Enter your call to action here</h2><div class="ab-cta-text ab-font-size-20" style="color:#f5f5f5"><p>Some text to support the call to action.</p></div></div><div class="ab-cta-button"><a href="https://example.com" target="_self" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Learn more</a></div></div>
<!-- /wp:atomic-blocks/ab-cta -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":25} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:25px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:columns {"columns":3,"align":"wide"} -->
<div class="wp-block-columns alignwide has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":15,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:15%;margin-top:0%;margin-bottom:0%" class="wp-block-atomic-blocks-ab-container aligncenter ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:image {"id":271,"align":"center","width":60,"height":60} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="{$genesis_homepage_icons['dial']}" alt="" class="wp-image-271" width="60" height="60"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"align":"center","className":"light"} -->
<h3 style="text-align:center" class="light">Your heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color">Introduce your service or product here. <a href="https://www.iconfinder.com/iconsets/streamline-icon-set-free-pack">Get icons</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color"><a href="https://example.com">Learn more →</a></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":15,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:15%;margin-top:0%;margin-bottom:0%" class="wp-block-atomic-blocks-ab-container aligncenter ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:image {"id":272,"align":"center","width":60,"height":60} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="{$genesis_homepage_icons['heart']}" alt="" class="wp-image-272" width="60" height="60"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"align":"center","className":"light"} -->
<h3 style="text-align:center" class="light">Your heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color">Introduce your service or product here. <a href="https://www.iconfinder.com/iconsets/streamline-icon-set-free-pack">Get icons</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color"><a href="https://example.com">Learn more →</a></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":15,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:15%;margin-top:0%;margin-bottom:0%" class="wp-block-atomic-blocks-ab-container aligncenter ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:image {"id":270,"align":"center","width":60,"height":60} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="{$genesis_homepage_icons['target']}" alt="" class="wp-image-270" width="60" height="60"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"align":"center","className":"light"} -->
<h3 style="text-align:center" class="light">Your heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color">Introduce your service or product here. <a href="https://www.iconfinder.com/iconsets/streamline-icon-set-free-pack">Get icons</a>.<br></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color"><a href="https://example.com">Learn more →</a></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"columns":3,"align":"wide"} -->
<div class="wp-block-columns alignwide has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":15,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:15%;margin-top:0%;margin-bottom:0%" class="wp-block-atomic-blocks-ab-container aligncenter ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:image {"id":280,"align":"center","width":60,"height":60} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="{$genesis_homepage_icons['happy']}" alt="" class="wp-image-280" width="60" height="60"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"align":"center","className":"light"} -->
<h3 style="text-align:center" class="light">Your heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color">Introduce your service or product here. <a href="https://www.iconfinder.com/iconsets/streamline-icon-set-free-pack">Get icons</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color"><a href="https://example.com">Learn more →</a></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":15,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:15%;margin-top:0%;margin-bottom:0%" class="wp-block-atomic-blocks-ab-container aligncenter ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:image {"id":281,"align":"center","width":58,"height":58} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="{$genesis_homepage_icons['contact']}" alt="" class="wp-image-281" width="58" height="58"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"align":"center","className":"light"} -->
<h3 style="text-align:center" class="light">Your heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color">Introduce your service or product here. <a href="https://www.iconfinder.com/iconsets/streamline-icon-set-free-pack">Get icons</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color"><a href="https://example.com">Learn more →</a></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":15,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:15%;margin-top:0%;margin-bottom:0%" class="wp-block-atomic-blocks-ab-container aligncenter ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:image {"id":282,"align":"center","width":55,"height":55} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="{$genesis_homepage_icons['mic']}" alt="" class="wp-image-282" width="55" height="55"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"align":"center","className":"light"} -->
<h3 style="text-align:center" class="light">Your heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color">Introduce your service or product here. <a href="https://www.iconfinder.com/iconsets/streamline-icon-set-free-pack">Get icons</a>.<br></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"light-gray"} -->
<p style="text-align:center" class="has-text-color has-light-gray-color"><a href="https://example.com">Learn more →</a></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":7,"containerPaddingRight":5,"containerPaddingLeft":5,"containerMarginTop":6,"containerMarginBottom":5,"containerWidth":"full","containerMaxWidth":1062,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:5%;padding-right:5%;padding-bottom:0%;padding-top:7%;margin-top:6%;margin-bottom:5%" class="wp-block-atomic-blocks-ab-container alignfull ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1062px"><!-- wp:columns -->
<div class="wp-block-columns has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left","textColor":"light-gray","customFontSize":40} -->
<p style="font-size:40px;text-align:left" class="has-text-color has-light-gray-color">Contact us today</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:button {"align":"right","className":"is-style-outline"} -->
<div class="wp-block-button alignright is-style-outline"><a class="wp-block-button__link" href="/contact">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-spacer -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-accordion {"accordionOpen":true} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-18"><details open><summary class="ab-accordion-title">Can I phone or email you?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>You can reach us on our <a href="/contact">contact page</a>, by emailing test@example.com, or by calling 123456.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:atomic-blocks/ab-accordion -->
<div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-18"><details><summary class="ab-accordion-title">How long have you been in business?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>Our team has a combined experience of over 60 years.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:atomic-blocks/ab-accordion -->
<div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-18"><details><summary class="ab-accordion-title">What is your returns policy?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>We offer a 30-day returns policy for all unused items. For more information, please view our terms of service.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":308} -->
<figure class="wp-block-image"><img src="$genesis_homepage_faq_image_url" alt="" class="wp-image-308"/><figcaption>Photo by <a href="https://unsplash.com/photos/rjhvXX7JBPc">Haley Powers</a> on <a href="https://unsplash.com/">Unsplash</a></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"columns":3,"align":"wide"} -->
<div class="wp-block-columns alignwide has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4} -->
<h4>About us</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Describe yourself or your business in a short sentence or two.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4} -->
<h4>Share this page</h4>
<!-- /wp:heading -->

<!-- wp:atomic-blocks/ab-sharing {"google":false,"linkedin":true,"email":true,"shareAlignment":"left","shareButtonStyle":"ab-share-icon-only"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4} -->
<h4>Contact us</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Get in touch with us today.</p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-default"} -->
<div class="wp-block-button is-style-default"><a class="wp-block-button__link" href="/contact">Contact us</a></div>
<!-- /wp:button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
CONTENT;

return $genesis_sample_homepage_content;
