<?php

/**
 * Add wrapper divs around all content for off-canvas mobile menu
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Prepend the site wrapper divs opening tags inside the body tag
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_site_wrap')) :
    /**
     * Prepend the site wrapper divs opening tags inside the body tag
     *
     * @since 1.0.0
     * @return void
     */
    function add_site_wrap(): void {
        echo '<div id="site-wrapper"><div id="site-canvas">';
    }
endif;

add_action('wp_body_open', 'CassidyDC\WPCustomBlockTheme\add_site_wrap');
