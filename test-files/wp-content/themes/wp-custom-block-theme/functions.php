<?php

/**
 * Theme Functions
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Create theme constants
 *
 * @since 1.2.0 THEME_VERSION
 * @since 2.0.5 THEME_PREFIX
 */
define('THEME_VERSION', wp_get_theme()->get('Version'));
define('THEME_PREFIX', 'wp-custom-block-theme');

/**
 * Set theme assets config settings
 *
 * @since 2.0.7
 */
require_once get_theme_file_path('inc/assets-config.php');

/**
 * Process theme assets for registering and enqueueing
 *
 * @since 2.0.7
 */
require_once get_theme_file_path('inc/assets-process.php');

/**
 * Register theme assets
 *
 * @since 2.0.5
 */
require_once get_theme_file_path('inc/assets-register.php');

/**
 * Enqueue theme assets
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/assets-enqueue.php');

/**
 * Add custom post type for Cities
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/cpt-city.php');

/**
 * Add custom post type for States
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/cpt-state.php');

/**
 * Add custom post type for Testimonials
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/cpt-testimonial.php');

/**
 * Add scripts to HTML head
 *
 * @since 1.3.0
 */
require_once get_theme_file_path('inc/head-scripts.php');

/**
 * Add tracking codes in HTML head
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/head-tracking.php');

/**
 * Add Zendesk help widget script to HTML head
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/head-zendesk.php');

/**
 * Add third-party plugin modifications
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/plugin-modifications.php');

/**
 * Remove comments from theme
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/theme-comments.php');

/**
 * Add excerpt option for pages
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/theme-excerpt.php');

/**
 * Create theme shortcodes
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/theme-shortcodes.php');

/**
 * Set theme custom logo attributes
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/theme-site-logo.php');

/**
 * Add theme site wrapper
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/theme-site-wrapper.php');

/**
 * Modify WordPress admin bar
 *
 * @since 1.2.0
 */
require_once get_theme_file_path('inc/wp-admin-bar.php');

/**
 * Modify WordPress admin menu
 *
 * @since 1.2.0
 */
require_once get_theme_file_path('inc/wp-admin-menu.php');

/**
 * Modify WordPress permissions
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/wp-admin-permissions.php');

/**
 * Remove unwanted Core WordPress features
 *
 * @since 1.0.0
 */
require_once get_theme_file_path('inc/wp-core-cleanup.php');
