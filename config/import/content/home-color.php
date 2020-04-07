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

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":4.5,"containerPaddingRight":0,"containerPaddingBottom":0,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerBackgroundColor":"#111111"} -->
<div style="background-color:#111111;padding-top:4.5%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:atomic-blocks/ab-cta {"buttonText":"Get Started Today","buttonBackgroundColor":"#0072e5","ctaBackgroundColor":"#111111","ctaTextColor":"#f5f5f5"} -->
<div style="background-color:#111111;text-align:center" class="wp-block-atomic-blocks-ab-cta ab-block-cta"><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-32" style="color:#f5f5f5">Ready to take your next step?</h2><div class="ab-cta-text ab-font-size-32" style="color:#f5f5f5"><p>Grow your audience and build a profitable online business.</p></div></div><div class="ab-cta-button"><a href="#" target="_self" rel="noopener noreferrer" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#0072e5">Get Started Today</a></div></div>
<!-- /wp:atomic-blocks/ab-cta --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":60} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:60px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">What people are saying</h2>
<!-- /wp:heading -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":25} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:25px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal","align":"wide"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal alignwide"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>Your course helped me to grow my email list from 500 to over 10,000 subscribers—all within 3 months! </p></div><div class="ab-testimonial-info"><h2 class="ab-testimonial-name" style="color:#32373c">Jane</h2><small class="ab-testimonial-title" style="color:#32373c">Food Blogger</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>I started using your email marketing technique and it helped me to make $5,000 more a month without any extra work! </p></div><div class="ab-testimonial-info"><h2 class="ab-testimonial-name" style="color:#32373c">Rob</h2><small class="ab-testimonial-title" style="color:#32373c">Copywriter</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>I was skeptical but I found that your system had multiplied my revenue by 40% after just the first quarter! </p></div><div class="ab-testimonial-info"><h2 class="ab-testimonial-name" style="color:#32373c">Susan</h2><small class="ab-testimonial-title" style="color:#32373c">Entrepreneur</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-spacer -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","align":"full","paddingTop":14,"paddingRight":5,"paddingBottom":8,"paddingLeft":5,"paddingUnit":"%","customTextColor":"#ffffff","customBackgroundColor":"#111111","columnMaxWidth":1062} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal ab-has-custom-background-color ab-has-custom-text-color ab-columns-center alignfull" style="padding-top:14%;padding-right:5%;padding-bottom:8%;padding-left:5%;background-color:#111111;color:#ffffff"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1062px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"align":"left","customTextColor":"#ffffff","customFontSize":40} -->
<p style="color:#ffffff;font-size:40px" class="has-text-color has-text-align-left">Contact us today</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:buttons {"align":"right","className":"home-contact"} -->
<div class="wp-block-buttons alignright home-contact"><!-- wp:button {"customTextColor":"#ffffff","borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color no-border-radius" href="#" style="color:#ffffff">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":60} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:60px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","align":"wide"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal alignwide"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-accordion {"accordionOpen":true,"className":"ab-font-size-18"} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-font-size-18 ab-block-accordion"><details open><summary class="ab-accordion-title">Can I phone or email you?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>You can reach us on our <a href="/contact">contact page</a> or by calling us at 1.123.456.7891</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:atomic-blocks/ab-accordion {"className":"ab-font-size-18"} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-font-size-18 ab-block-accordion"><details><summary class="ab-accordion-title">How long have you been in business?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>Our team has a combined experience of over 60 years.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:atomic-blocks/ab-accordion {"className":"ab-font-size-18"} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-font-size-18 ab-block-accordion"><details><summary class="ab-accordion-title">What is your return policy?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>We offer a 30-day return policy for all unused items. For more information, please view our terms of service.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":1655,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="$genesis_sample_homepage_faq_image_url" alt="" class="wp-image-1655"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->
CONTENT;
