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

// Photo by Rohit Tandon on Unsplash: https://unsplash.com/photos/9wg5jCEPBsw.
$genesis_sample_homepage_header_image_url = CHILD_URL . '/config/import/images/mountain-color.jpg';

// Photo by Haley Powers on Unsplash: https://unsplash.com/photos/rjhvXX7JBPc.
$genesis_sample_homepage_faq_image_url = CHILD_URL . '/config/import/images/home-about-color.jpg';

return <<<CONTENT
<!-- wp:media-text {"align":"full","mediaId":1657,"mediaType":"image","isStackedOnMobile":true} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="$genesis_sample_homepage_header_image_url" alt="" class="wp-image-1657"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1} -->
<h1>We'll teach you how to build and grow an online business.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>All the resources, training, and support you need to run your dream online business! </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"left"} -->
<div class="wp-block-buttons alignleft"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link" href="#">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":4.5,"containerPaddingRight":0,"containerPaddingBottom":0,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerBackgroundColor":"#111111"} -->
<div style="background-color:#111111;padding-top:4.5%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1600px"><!-- wp:genesis-blocks/gb-cta {"buttonText":"Get Started Today","buttonBackgroundColor":"#0072e5","ctaBackgroundColor":"#111111","ctaTextColor":"#f5f5f5"} -->
<div style="background-color:#111111;text-align:center" class="wp-block-genesis-blocks-gb-cta gb-block-cta"><div class="gb-cta-content"><h2 class="gb-cta-title gb-font-size-32" style="color:#f5f5f5">Ready to take your next step?</h2><div class="gb-cta-text gb-font-size-32" style="color:#f5f5f5"><p>Grow your audience and build a profitable online business.</p></div></div><div class="gb-cta-button"><a href="#" target="_self" rel="noopener noreferrer" class="gb-button gb-button-shape-rounded gb-button-size-medium" style="color:#ffffff;background-color:#0072e5">Get Started Today</a></div></div>
<!-- /wp:genesis-blocks/gb-cta --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":60} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:60px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">What people are saying</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":25} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:25px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal","align":"wide"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal alignwide"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:genesis-blocks/gb-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-genesis-blocks-gb-testimonial left-aligned gb-font-size-18 gb-block-testimonial"><div class="gb-testimonial-text"><p>Your course helped me to grow my email list from 500 to over 10,000 subscribers—all within 3 months! </p></div><div class="gb-testimonial-info"><h2 class="gb-testimonial-name" style="color:#32373c">Jane</h2><small class="gb-testimonial-title" style="color:#32373c">Food Blogger</small></div></div>
<!-- /wp:genesis-blocks/gb-testimonial --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:genesis-blocks/gb-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-genesis-blocks-gb-testimonial left-aligned gb-font-size-18 gb-block-testimonial"><div class="gb-testimonial-text"><p>I started using your email marketing technique and it helped me to make $5,000 more a month without any extra work! </p></div><div class="gb-testimonial-info"><h2 class="gb-testimonial-name" style="color:#32373c">Rob</h2><small class="gb-testimonial-title" style="color:#32373c">Copywriter</small></div></div>
<!-- /wp:genesis-blocks/gb-testimonial --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:genesis-blocks/gb-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-genesis-blocks-gb-testimonial left-aligned gb-font-size-18 gb-block-testimonial"><div class="gb-testimonial-text"><p>I was skeptical but I found that your system had multiplied my revenue by 40% after just the first quarter! </p></div><div class="gb-testimonial-info"><h2 class="gb-testimonial-name" style="color:#32373c">Susan</h2><small class="gb-testimonial-title" style="color:#32373c">Entrepreneur</small></div></div>
<!-- /wp:genesis-blocks/gb-testimonial --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-spacer -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","align":"full","paddingTop":14,"paddingRight":5,"paddingBottom":8,"paddingLeft":5,"paddingUnit":"%","customTextColor":"#ffffff","customBackgroundColor":"#111111","columnMaxWidth":1062} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal gb-has-custom-background-color gb-has-custom-text-color gb-columns-center alignfull" style="padding-top:14%;padding-right:5%;padding-bottom:8%;padding-left:5%;background-color:#111111;color:#ffffff"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1062px"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"align":"left","customTextColor":"#ffffff","customFontSize":40} -->
<p style="color:#ffffff;font-size:40px" class="has-text-color has-text-align-left">Contact us today</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:buttons {"align":"right","className":"home-contact"} -->
<div class="wp-block-buttons alignright home-contact"><!-- wp:button {"customTextColor":"#ffffff","borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color no-border-radius" href="#" style="color:#ffffff">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":60} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:60px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","align":"wide"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal alignwide"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:genesis-blocks/gb-accordion {"accordionOpen":true,"className":"gb-font-size-18"} -->
<div class="wp-block-genesis-blocks-gb-accordion gb-font-size-18 gb-block-accordion"><details open><summary class="gb-accordion-title">Can I phone or email you?</summary><div class="gb-accordion-text"><!-- wp:paragraph -->
<p>You can reach us on our <a href="/contact">contact page</a> or by calling us at 1.123.456.7891</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:genesis-blocks/gb-accordion -->

<!-- wp:genesis-blocks/gb-accordion {"className":"gb-font-size-18"} -->
<div class="wp-block-genesis-blocks-gb-accordion gb-font-size-18 gb-block-accordion"><details><summary class="gb-accordion-title">How long have you been in business?</summary><div class="gb-accordion-text"><!-- wp:paragraph -->
<p>Our team has a combined experience of over 60 years.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:genesis-blocks/gb-accordion -->

<!-- wp:genesis-blocks/gb-accordion {"className":"gb-font-size-18"} -->
<div class="wp-block-genesis-blocks-gb-accordion gb-font-size-18 gb-block-accordion"><details><summary class="gb-accordion-title">What is your return policy?</summary><div class="gb-accordion-text"><!-- wp:paragraph -->
<p>We offer a 30-day return policy for all unused items. For more information, please view our terms of service.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:genesis-blocks/gb-accordion --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":1655,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="$genesis_sample_homepage_faq_image_url" alt="" class="wp-image-1655"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->
CONTENT;
