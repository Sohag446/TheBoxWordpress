<?php 

function register_article_taxonomy() {
    $labels = array(
        'name' => _x( 'Articles', 'Articles general name' ),
        'singular_name' => _x( 'Articles', 'Articles singular name' ),
        'search_items' =>  __( 'Search Articles Category' ),
        'all_items' => __( 'All Articles' ),
        'parent_item' => __( 'Parent Articles' ),
        'parent_item_colon' => __( 'Parent Articles:' ),
        'edit_item' => __( 'Edit Articles' ), 
        'update_item' => __( 'Update Articles' ),
        'add_new_item' => __( 'Add New Articles' ),
        'new_item_name' => __( 'New Articles Name' ),
        'menu_name' => __( 'Articles Category'),
    );

    register_taxonomy(
        'article_category',
        'article',
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'article-category', 'with_front' => false),
        )
    );
}
add_action('init', 'register_article_taxonomy');
?>
