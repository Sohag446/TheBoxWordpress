<?php


function thebox_widgets_register(){

    register_sidebar( array(
        'name' => __('Footer Widgets Area Left', 'TheBoxcompany'),
        'id' => 'footer-1',
        'description' => 'Apperas in the sidebar','TheBoxcompany',
        'before_widget' => '<div class="child_footer_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',    
    ));

    register_sidebar( array(
        'name' => __('Footer Widgets Area Right', 'TheBoxcompany'),
        'id' => 'footer-2',
        'description' => 'Apperas in the sidebar','TheBoxcompany',
        'before_widget' => '<div class="child_footer_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'thebox_widgets_register');