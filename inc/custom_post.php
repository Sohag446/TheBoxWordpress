
<?php
/* 
*This is the custom post type 
*/

function project_custom_post_type(){
    $args = array(
        'label' => __('Projects', 'TheBoxcompany'),
        'description' => __('Custom post for Projects', 'TheBoxcompany'),
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',),
        'singular_name' => __('Project', 'TheBoxcompany'),
        'add_new' => __('Add New', 'TheBoxcompany'),
        'add_new_item' => __('Add new project', 'TheBoxcompany'),
        'edit_item' => __('Edit Project', 'TheBoxcompany'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'can_export' => true,
        'has_archive' => true,
        'taxonomies' => ['category'],
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-hammer',
    );

    register_post_type( 'project', $args);
}
add_action( 'init', 'project_custom_post_type');
add_theme_support( 'post-thumbnails' );

