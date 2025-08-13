<?php

/**
 * Modify theme permissions
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Add SVG to allowed file uploads for specific users.
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_file_types_to_uploads')) :
    /**
     * Add SVG to allowed file uploads for specific users.
     *
     * @since 1.0.0
     * @param  array $file_types A list of allowed file types.
     * @return array The list of allowed file types.
     */
    function add_file_types_to_uploads(array $file_types): array {
        $current_user = wp_get_current_user();
        if ('Jacob' === $current_user->user_login) {
            $new_filetypes        = [];
            $new_filetypes['svg'] = 'image/svg+xml';
            $file_types           = array_merge($file_types, $new_filetypes);
            return $file_types;
        } else {
            return $file_types;
        }
    }
endif;

add_filter('upload_mimes', 'CassidyDC\WPCustomBlockTheme\add_file_types_to_uploads');
