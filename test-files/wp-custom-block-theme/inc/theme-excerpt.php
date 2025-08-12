<?php

/**
 * Add excerpt for pages
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Add page excerpt option
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_page_excerpt_option')) :
    /**
     * Add page excerpt option
     *
     * @since 1.0.0
     * @return void
     */
    function add_page_excerpt_option(): void {
        add_post_type_support('page', 'excerpt');
    }
endif;

add_action('after_setup_theme', 'CassidyDC\WPCustomBlockTheme\add_page_excerpt_option');
