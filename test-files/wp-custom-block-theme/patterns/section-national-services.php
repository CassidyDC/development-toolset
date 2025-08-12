<?php

/**
 * Title: National Services Section
 * Slug: wp-custom-block-theme/section-national-services
 * Categories: sections
 * Keywords: section, national, states, footer
 * Viewport Width: 1440
 *
 * @package CassidyDC\WPCustomBlockTheme\Patterns
 * @since WPCustomBlockTheme 3.0.0
 * @version 1.0.0
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/11/sunset-in-clouds.jpg","id":3205,"alt":"Sunset in Clouds","hasParallax":true,"dimRatio":80,"overlayColor":"primary-white","isUserOverlayColor":true,"isDark":false,"className":"footer-states","style":{"color":{"duotone":"var:preset|duotone|primary"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-parallax footer-states" id="footer-states"><span aria-hidden="true" class="wp-block-cover__background has-primary-white-background-color has-background-dim-80 has-background-dim"></span>
    <div role="img" aria-label="Sunset in Clouds" class="wp-block-cover__image-background wp-image-3205 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/11/sunset-in-clouds.jpg)"></div>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"className":"footer-states__inner","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group footer-states__inner">
            <!-- wp:image {"id":7843,"sizeSlug":"large","linkDestination":"none","className":"footer-states__figure wow fadeinright","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
            <figure class="wp-block-image size-large footer-states__figure wow fadeinright"><img src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2024/04/wp-custom-block-theme-us-map-1024x768.png" alt="WPCustomBlockTheme USA Map" class="wp-image-7843" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"footer-states__content wow fadeinleft","layout":{"type":"constrained"}} -->
            <div class="wp-block-group footer-states__content wow fadeinleft">
                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}}} -->
                <h3 class="wp-block-heading" style="text-transform:uppercase">National Utility Billing Services</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>WPCustomBlockTheme provides Utility Billing services to all fifty states. We stay up to date with Utility Billing regulations to ensure proper setup and a seamless, error free implementation. Find out the current utility regulations in your state.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url(home_url()); ?>/state-directory/">Learn More</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
