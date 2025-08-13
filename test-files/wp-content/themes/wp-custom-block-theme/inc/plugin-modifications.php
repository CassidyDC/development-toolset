<?php

/**
 * Third-Party Plugin Modifications
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Remove Gravity Form's legend text for required fields
 *
 * @since 1.0.0
 * @link https://docs.gravityforms.com/gform_required_legend/
 */
add_filter('gform_required_legend', '__return_empty_string');
