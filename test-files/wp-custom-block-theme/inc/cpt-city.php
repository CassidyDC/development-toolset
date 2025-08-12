<?php

/**
 * Create and modify the City Custom Post Type (CPT)
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Create custom post type for City
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_city_cpt')) :
    /**
     * Create custom post type for City
     *
     * @since 1.0.0
     * @return void
     */
    function add_city_cpt(): void {
        $labels = [
            'name'                     => __('City Pages', 'wp-custom-block-theme'),
            'singular_name'            => __('City Page', 'wp-custom-block-theme'),
            'add_new'                  => __('Add New City', 'wp-custom-block-theme'),
            'add_new_item'             => __('Add New City', 'wp-custom-block-theme'),
            'edit_item'                => __('Edit City', 'wp-custom-block-theme'),
            'update_item'              => __('Update City', 'wp-custom-block-theme'),
            'new_item'                 => __('New City', 'wp-custom-block-theme'),
            'view_item'                => __('View City Page', 'wp-custom-block-theme'),
            'view_items'               => __('View City Pages', 'wp-custom-block-theme'),
            'search_items'             => __('Search City Pages', 'wp-custom-block-theme'),
            'not_found'                => __('No city pages found.', 'wp-custom-block-theme'),
            'not_found_in_trash'       => __('No city pages found in Trash', 'wp-custom-block-theme'),
            'all_items'                => __('All City Pages', 'wp-custom-block-theme'),
            'archive'                  => __('City Archives', 'wp-custom-block-theme'),
            'attributes'               => __('City Attributes', 'wp-custom-block-theme'),
            'item_published'           => __('City Published', 'wp-custom-block-theme'),
            'item_published_privately' => __('City Published', 'wp-custom-block-theme'),
            'item_reverted_to_draft'   => __('City reverted to draft', 'wp-custom-block-theme'),
            'item_updated'             => __('City Updated', 'wp-custom-block-theme'),
        ];
        $args   = [
            'labels'       => $labels,
            'description'  => __('Displays a city page', 'wp-custom-block-theme'),
            'public'       => true,
            'hierarchical' => true,
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-admin-page',
            'supports'     => ['title', 'editor', 'author', 'revisions', 'excerpt', 'thumbnail'],
            'rewrite'      => true,
        ];
        register_post_type('city', $args);
    }
endif;

add_action('init', 'CassidyDC\WPCustomBlockTheme\add_city_cpt');

/**
 * Make pretty permalink for City CPT pages
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\city_permalinks')) :
    /**
     * Make pretty permalink for City CPT pages
     *
     * @since 1.0.0
     * @link https://developer.wordpress.org/reference/hooks/post_type_link/
     * @param  string   $post_link The post's permalink.
     * @param  \WP_Post $post The post in question.
     * @return string The post's permalink.
     */
    function city_permalinks(string $post_link, \WP_Post $post): string {
        if ('city' === $post->post_type && 'publish' === $post->post_status) {
            $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
        }
        return $post_link;
    }
endif;

add_filter('post_type_link', 'CassidyDC\WPCustomBlockTheme\city_permalinks', 10, 3);

/**
 * Add City CPT to main query
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_city_post_type_to_main_query')) :
    /**
     * Add City CPT to main query
     *
     * @since 1.0.0
     * @param  \WP_Query $query The main query.
     * @return void
     */
    function add_city_post_type_to_main_query(\WP_Query $query): void {
        // Bail if this is not the main query.
        if (! $query->is_main_query()) {
            return;
        }
        // Bail if this query doesn't match our very specific rewrite rule.
        if (! isset($query->query['page']) || 2 !== count($query->query)) {
            return;
        }
        // Bail if we're not querying based on the post name.
        if (empty($query->query['name'])) {
            return;
        }
        // Add City post-type to the list of post types WP will include when it queries based on the post name.
        $query->set('post_type', ['post', 'page', 'city']);
    }
endif;

add_action('pre_get_posts', 'CassidyDC\WPCustomBlockTheme\add_city_post_type_to_main_query');
