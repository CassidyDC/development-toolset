<?php

/**
 * Create and modify the State Custom Post Type (CPT)
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Create custom post type for State
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_state_cpt')) :
    /**
     * Create custom post type for State
     *
     * @since 1.0.0
     * @return void
     */
    function add_state_cpt(): void {
        $labels = [
            'name'                     => __('State Pages', 'wp-custom-block-theme'),
            'singular_name'            => __('State Page', 'wp-custom-block-theme'),
            'add_new'                  => __('Add New State', 'wp-custom-block-theme'),
            'add_new_item'             => __('Add New State', 'wp-custom-block-theme'),
            'edit_item'                => __('Edit State', 'wp-custom-block-theme'),
            'update_item'              => __('Update State', 'wp-custom-block-theme'),
            'new_item'                 => __('New State', 'wp-custom-block-theme'),
            'view_item'                => __('View State Page', 'wp-custom-block-theme'),
            'view_items'               => __('View State Pages', 'wp-custom-block-theme'),
            'search_items'             => __('Search State Pages', 'wp-custom-block-theme'),
            'not_found'                => __('No state pages found.', 'wp-custom-block-theme'),
            'not_found_in_trash'       => __('No state pages found in Trash', 'wp-custom-block-theme'),
            'all_items'                => __('All State Pages', 'wp-custom-block-theme'),
            'archive'                  => __('State Archives', 'wp-custom-block-theme'),
            'attributes'               => __('State Attributes', 'wp-custom-block-theme'),
            'item_published'           => __('State Published', 'wp-custom-block-theme'),
            'item_published_privately' => __('State Published', 'wp-custom-block-theme'),
            'item_reverted_to_draft'   => __('State reverted to draft', 'wp-custom-block-theme'),
            'item_updated'             => __('State Updated', 'wp-custom-block-theme'),
        ];
        $args   = [
            'labels'       => $labels,
            'description'  => __('Displays a state page', 'wp-custom-block-theme'),
            'public'       => true,
            'hierarchical' => false,
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-admin-page',
            'supports'     => ['title', 'editor', 'author', 'revisions', 'excerpt', 'thumbnail'],
            'rewrite'      => ['slug' => 'state-directory'],
        ];
        register_post_type('state', $args);
    }
endif;

add_action('init', 'CassidyDC\WPCustomBlockTheme\add_state_cpt');
