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

$genesis_sample_homepage_header_image_url = CHILD_URL . '/config/import/images/mountain-bw.jpg';

// Photo by Haley Powers on Unsplash: https://unsplash.com/photos/rjhvXX7JBPc.
$genesis_sample_homepage_faq_image_url = CHILD_URL . '/config/import/images/home-about.jpg';

return <<<CONTENT
<!-- wp:media-text {"align":"full","mediaId":1477,"mediaType":"image","isStackedOnMobile":true} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="$genesis_sample_homepage_header_image_url" alt="" class="wp-image-1477"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1} -->
<h1>We'll teach you how to build and grow an online business.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>All the resources, training, and support you need to run your dream online business! </p>
<!-- /wp:paragraph -->

<!-- wp:button {"textColor":"light-gray","className":"is-style-default"} -->
<div class="wp-block-button is-style-default"><a class="wp-block-button__link has-text-color has-light-gray-color" href="#">Learn More<br></a></div>
<!-- /wp:button -->

</div></div>
<!-- /wp:media-text -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":4.5,"containerWidth":"full","containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:0%;padding-right:0%;padding-bottom:0%;padding-top:4.5%;margin-top:0%;margin-bottom:0%" class="wp-block-atomic-blocks-ab-container alignfull ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:atomic-blocks/ab-cta {"buttonText":"Get Started Today","buttonBackgroundColor":"#0072e5","ctaBackgroundColor":"#333333","ctaTextColor":"#f5f5f5"} -->
<div style="background-color:#333333;text-align:center" class="wp-block-atomic-blocks-ab-cta ab-block-cta"><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-32" style="color:#f5f5f5">Ready to take your next step?</h2><div class="ab-cta-text ab-font-size-32" style="color:#f5f5f5"><p>Grow your audience and build a profitable online business.</p></div></div><div class="ab-cta-button"><a href="#" target="_self" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#0072e5">Get Started Today</a></div></div>
<!-- /wp:atomic-blocks/ab-cta -->

</div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":60} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:60px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:heading {"align":"center"} -->
<h2 style="text-align:center">What people are saying</h2>
<!-- /wp:heading -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":25} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:25px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:columns {"columns":3,"align":"wide"} -->
<div class="wp-block-columns alignwide has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>Your course helped me to grow my email list from 500 to over 10,000 subscribers—all within 3 months! </p></div><div class="ab-testimonial-info"><h2 class="ab-testimonial-name" style="color:#32373c">Jane</h2><small class="ab-testimonial-title" style="color:#32373c">Food Blogger</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>I started using your email marketing technique and it helped me to make $5,000 more a month without any extra work! </p></div><div class="ab-testimonial-info"><h2 class="ab-testimonial-name" style="color:#32373c">Rob</h2><small class="ab-testimonial-title" style="color:#32373c">Copywriter</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>I was skeptical but I found that your system had multiplied my revenue by 40% after just the first quarter! </p></div><div class="ab-testimonial-info"><h2 class="ab-testimonial-name" style="color:#32373c">Susan</h2><small class="ab-testimonial-title" style="color:#32373c">Entrepreneur</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:atomic-blocks/ab-spacer -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":12,"containerPaddingRight":5,"containerPaddingBottom":2.5,"containerPaddingLeft":5,"containerMarginTop":6,"containerMarginBottom":5,"containerWidth":"full","containerMaxWidth":1062,"containerBackgroundColor":"#333"} -->
<div style="background-color:#333;padding-left:5%;padding-right:5%;padding-bottom:2.5%;padding-top:12%;margin-top:6%;margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1062px"><!-- wp:columns -->
<div class="wp-block-columns has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left","customTextColor":"#f5f5f5","customFontSize":40} -->
<p style="color:#f5f5f5;font-size:40px;text-align:left" class="has-text-color">Contact us today</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:button {"customTextColor":"#f5f5f5","align":"right","className":"is-style-outline"} -->
<div class="wp-block-button alignright is-style-outline"><a class="wp-block-button__link has-text-color" href="#" style="color:#f5f5f5">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":60} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:60px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-accordion {"accordionOpen":true} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-18"><details open><summary class="ab-accordion-title">Can I phone or email you?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>You can reach us on our <a href="#">contact page</a> or by calling us at 1.123.456.7891</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:atomic-blocks/ab-accordion -->
<div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-18"><details><summary class="ab-accordion-title">How long have you been in business?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>Our team has a combined experience of over 60 years.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:atomic-blocks/ab-accordion -->
<div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-18"><details><summary class="ab-accordion-title">What is your return policy?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>We offer a 30-day return policy for all unused items. For more information, please view our terms of service.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":308} -->
<figure class="wp-block-image"><img src="$genesis_sample_homepage_faq_image_url" alt="" class="wp-image-308"/><figcaption>Photo by&nbsp;<a href="https://unsplash.com/photos/rjhvXX7JBPc">Haley Powers</a>&nbsp;on&nbsp;<a href="https://unsplash.com/">Unsplash</a></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
CONTENT;
