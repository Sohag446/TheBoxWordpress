<?php

function sohag_css_file_calling(){
    wp_enqueue_style( 'sohag-style', get_stylesheet_uri() ); 

    wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'custom' );

    wp_register_style( 'slick_min', get_template_directory_uri() . '/css/slick.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'slick_min' );

    wp_register_style( 'slick-theme_min', get_template_directory_uri() . '/css/slick-theme.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'slick-theme_min' );

    wp_register_style( 'fontPage_design', get_template_directory_uri() . '/css/fontPage_design.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'fontPage_design' );

    wp_register_style( 'custom_post_type', get_template_directory_uri() . '/css/custom_post_type.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'custom_post_type');

    wp_register_style( 'article_page_design', get_template_directory_uri() . '/css/article_page_design.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'article_page_design');
}
add_action('wp_enqueue_scripts','sohag_css_file_calling');


function sohag_js_file_calling(){

    wp_register_script( 'jquery_min', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'jquery_min');

    wp_register_script( 'slick-script', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'slick-script' );

    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'custom-script' );

    if(is_front_page()){
        wp_enqueue_script('jquery_min');
        wp_enqueue_script('slick-script');
        wp_enqueue_script('custom-script');
    }
}
add_action('wp_enqueue_scripts','sohag_js_file_calling');
