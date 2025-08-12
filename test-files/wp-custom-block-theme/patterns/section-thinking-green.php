<?php

/**
 * Title: Thinking Green Section
 * Slug: wp-custom-block-theme/section-thinking-green
 * Categories: sections
 * Keywords: section, green, footer
 * Viewport Width: 1440
 *
 * @package CassidyDC\WPCustomBlockTheme\Patterns
 * @since WPCustomBlockTheme 3.0.0
 * @version 1.0.0
 */

?>

<!-- wp:group {"className":"footer-thinking-green","layout":{"type":"constrained"}} -->
<div id="footer-thinking-green" class="wp-block-group footer-thinking-green">
    <!-- wp:group {"align":"wide","className":"footer-thinking-green__inner","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide footer-thinking-green__inner">
        <!-- wp:group {"className":"thinking-green-content wow fadeinright"} -->
        <div class="wp-block-group thinking-green-content wow fadeinright">
            <!-- wp:heading {"textColor":"tertiary"} -->
            <h2 class="wp-block-heading has-tertiary-color has-text-color" id="h-thinking-green-to-keep-our-planet-blue"><strong>Thinking green to keep our planet blue</strong></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"twb"} -->
            <p class="twb">WPCustomBlockTheme is dedicated to a sustainable environment through awareness and conservation.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"buttonColor":"tertiary"} -->
                <div class="wp-block-button is-color-tertiary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url(home_url()); ?>/about/">Learn More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->

        <!-- wp:image {"id":143,"sizeSlug":"full","linkDestination":"none","align":"center","className":"figure-green-hands wow fadeinleft"} -->
        <figure class="wp-block-image aligncenter size-full figure-green-hands wow fadeinleft"><img src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2022/05/green-hands.jpg" alt="Green Hands" class="wp-image-143" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
