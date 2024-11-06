<?php

//add title support
add_theme_support('title-tag');

//add post thumbnail support
function theme_setup() {
    add_theme_support('post-thumbnails', array('page', 'post','Projects',));
    add_image_size('post-thumbnails', 253, 400, true);
}
add_action('after_setup_theme', 'theme_setup');

function mon_theme_support_editor_de_site() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'block-templates' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'border' );
    add_editor_style( 'style-editor.css' );
    add_theme_support( 'custom-line-height' );
    add_theme_support( 'custom-units', array() );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'block-template-parts' );
    add_theme_support('page-attributes');
    add_theme_support('page-attributes');
}
add_action('after_setup_theme', 'mon_theme_support_editor_de_site');


function disable_editor_for_front_page() {
    $front_page_id = get_option('page_on_front');
    if (isset($_GET['post']) && $_GET['post'] == $front_page_id) {
        remove_post_type_support('page', 'editor');
    }
}

add_action('admin_init', 'disable_editor_for_front_page');
//article page search
function custom_search_redirect($query) {
    if ($query->is_search() && !is_admin() && $query->is_main_query()) {
        $query->set('post_type', 'article');
    }
}
add_action('pre_get_posts', 'custom_search_redirect');


//except support
function custom_excerpt($limit = 20) {
    $excerpt = get_the_excerpt();
    $excerpt = explode(' ', $excerpt, $limit);
    
    if (count($excerpt) >= $limit) {
        array_pop($excerpt); 
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt .= ' <a href="' . get_permalink() . '" class="read-more">Read More</a>';
    
    return $excerpt;
}


// Pagenav Function
function thebox_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages ='';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
      <div class="wp_pagenav">';
        if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' . $current . '<span> of </span>' . $max . '</p>';
        echo $pages . paginate_links($args);
        if ($max > 1 ) echo '</div><pre>';
  }
