<?php
// This template for Articles custom post type.

function articles_custom_post_type() {
    $args = array(
        'label' => __('Articles', 'TheBoxcompany'),
        'description' => __('Custom post for Articles', 'TheBoxcompany'),
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',),
        'singular_name' => __('Article', 'TheBoxcompany'),
        'labels' => array(
            'add_new' => __('Add New Article', 'TheBoxcompany'),
            'add_new_item' => __('Add New Article', 'TheBoxcompany'),
            'edit_item' => __('Edit Article', 'TheBoxcompany'),
            'new_item' => __('New Article', 'TheBoxcompany'),
            'view_item' => __('View Article', 'TheBoxcompany'),
            'search_items' => __('Search Articles', 'TheBoxcompany'),
            'not_found' => __('No articles found', 'TheBoxcompany'),
            'not_found_in_trash' => __('No articles found in Trash', 'TheBoxcompany'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'can_export' => true,
        'has_archive' => true,
        'taxonomies' => ['category'],
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
    );

    register_post_type('article', $args);  
}
add_action('init', 'articles_custom_post_type');

add_theme_support('post-thumbnails');
