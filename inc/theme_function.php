<?php


function thebox_customizer_register($wp_customize){

    //Header Area
    $wp_customize->add_section('thebox-header_area', array(
        'title' =>__('Header Area','TheBoxcompany'),
        'description' => 'Change loge using section'
    ));

    $wp_customize->add_setting('thebox-logo',array(
        'default' => get_bloginfo('template_directory').'/images/logo.png',
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'thebox-logo', array(
        'label' => 'Logo Upload',
        'setting' => 'thebox-logo',
        'section' => 'thebox-header_area'
    )));

    

    //Menu position option

    $wp_customize->add_section('thebox-menu_option',array(
        'title' =>__('Menu Position Option', 'TheBoxcompany'),
        'description' => 'change menu position'
    ));

    $wp_customize->add_setting('thebox-menu_position',array(
        'default' => 'right_menu',
    ));

    $wp_customize-> add_control('thebox-menu_position',array(
        'label' => 'Manu Position',
        'description' => 'Select Your menu',
        'setting' => 'thebox-menu_position',
        'section' => 'thebox-menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));


     //Footer option

     $wp_customize->add_section('thebox-footer_option',array(
        'title' =>__('Footer Option', 'TheBoxcompany'),
        'description' => 'change & update Footer section'
    ));

    $wp_customize->add_setting('thebox-footer_section',array(
        'default' => 'TheBox Company © 2022. All Rights Reserved',
    ));

    $wp_customize-> add_control('thebox-footer_section',array(
        'label' => 'Copyright text',
        'description' => 'change & update now Footer section',
        'setting' => 'thebox-footer_section',
        'section' => 'thebox-footer_option',
    ));

     // Google Fonts Enqueue
     function thebox_add_google_fonts(){
        wp_enqueue_style('thebox_google_fonts', '<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">', false);
    }
    add_action( 'wp_enqueue_scripts', 'thebox_add_google_fonts');
}
add_action('customize_register','thebox_customizer_register' );


