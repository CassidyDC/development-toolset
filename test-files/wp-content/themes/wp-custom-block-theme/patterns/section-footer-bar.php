<?php

/**
 * Title: Footer Bar Section
 * Slug: wp-custom-block-theme/section-footer-bar
 * Categories: sections
 * Keywords: section, footer, bar
 * Viewport Width: 1440
 *
 * @package CassidyDC\WPCustomBlockTheme\Patterns
 * @since WPCustomBlockTheme 3.0.0
 * @version 1.0.0
 */

?>

<!-- wp:group {"align":"full","className":"footer-bottom-bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull footer-bottom-bar has-background has-primary-background-color" id="footer-bottom-bar">
    <!-- wp:group {"align":"wide","className":"footer-bottom-bar__inner"} -->
    <div class="wp-block-group alignwide footer-bottom-bar__inner">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:social-links {"iconColor":"white","iconColorValue":"hsl(0, 0%, 100%)","iconBackgroundColor":"secondary","iconBackgroundColorValue":"hsl(200, 74%, 48%)","openInNewTab":true} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color">
                <!-- wp:social-link {"url":"https://www.linkedin.com/company/multifamily-utility-company","service":"linkedin","label":"LinkedIn"} /-->
                <!-- wp:social-link {"url":"https://vimeo.com/multifamilyutility","service":"vimeo","label":"Vimeo"} /-->
                <!-- wp:social-link {"url":"https://www.youtube.com/user/multifamilyutility","service":"youtube","label":"YouTube"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0"}},"textColor":"white","className":"footer-bottom-bar__content","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group footer-bottom-bar__content has-white-color has-text-color has-link-color">
            <!-- wp:paragraph {"className":"footer-copyright"} -->
            <p class="footer-copyright"><span>&copy; <?php echo esc_html(gmdate('Y')); ?> WPCustomBlockTheme Utility</span></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><a href="<?php echo esc_url(home_url()); ?>/privacy-policy/">Privacy Policy</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph --><!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
