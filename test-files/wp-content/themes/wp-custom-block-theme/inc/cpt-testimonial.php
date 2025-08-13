<?php

/**
 * Create and modify the Testimonial Custom Post Type (CPT)
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Create custom post type for Testimonial
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_testimonial_cpt')) :
    /**
     * Create custom post type for Testimonial
     *
     * @since 1.1.0
     * @return void
     */
    function add_testimonial_cpt(): void {
        $labels = [
            'name'                     => __('Testimonials', 'wp-custom-block-theme'),
            'singular_name'            => __('Testimonial', 'wp-custom-block-theme'),
            'add_new'                  => __('Add New Testimonial', 'wp-custom-block-theme'),
            'add_new_item'             => __('Add New Testimonial', 'wp-custom-block-theme'),
            'edit_item'                => __('Edit Testimonial', 'wp-custom-block-theme'),
            'update_item'              => __('Update Testimonial', 'wp-custom-block-theme'),
            'new_item'                 => __('New Testimonial', 'wp-custom-block-theme'),
            'view_item'                => __('View Testimonial', 'wp-custom-block-theme'),
            'view_items'               => __('View Testimonial', 'wp-custom-block-theme'),
            'search_items'             => __('Search Testimonial', 'wp-custom-block-theme'),
            'not_found'                => __('No testimonials found.', 'wp-custom-block-theme'),
            'not_found_in_trash'       => __('No testimonials found in Trash', 'wp-custom-block-theme'),
            'all_items'                => __('All Testimonials', 'wp-custom-block-theme'),
            'archive'                  => __('Testimonial Archives', 'wp-custom-block-theme'),
            'attributes'               => __('Testimonial Attributes', 'wp-custom-block-theme'),
            'item_published'           => __('Testimonial Published', 'wp-custom-block-theme'),
            'item_published_privately' => __('Testimonial Published', 'wp-custom-block-theme'),
            'item_reverted_to_draft'   => __('Testimonial reverted to draft', 'wp-custom-block-theme'),
            'item_updated'             => __('Testimonial Updated', 'wp-custom-block-theme'),
        ];
        $args   = [
            'labels'             => $labels,
            'description'        => __('Displays a testimonial', 'wp-custom-block-theme'),
            'public'             => false,
            'publicly_queryable' => true,
            'has_archive'        => false,
            'hierarchical'       => false,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-heart',
            'supports'           => ['title', 'editor', 'revisions'],
        ];
        register_post_type('testimonial', $args);
    }
endif;

add_action('init', 'CassidyDC\WPCustomBlockTheme\add_testimonial_cpt');
