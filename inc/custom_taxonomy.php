<?php 

function register_project_taxonomy() {
    $labels = array(
        'name' => _x( 'Projects', 'taxonomy general name' ),
        'singular_name' => _x( 'Project', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Project Category' ),
        'all_items' => __( 'All Project' ),
        'parent_item' => __( 'Parent Project' ),
        'parent_item_colon' => __( 'Parent Project:' ),
        'edit_item' => __( 'Edit Project' ), 
        'update_item' => __( 'Update Project' ),
        'add_new_item' => __( 'Add New Project' ),
        'new_item_name' => __( 'New Project Name' ),
        'menu_name' => __( 'Project Category'),
    );

    register_taxonomy(
        'project_category',
        'project',
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'project-category' ),
        )
    );
}
add_action('init', 'register_project_taxonomy');


?>