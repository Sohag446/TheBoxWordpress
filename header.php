<?php
/* 
*This template for displaying the Header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header"">
            <div class="container">
                <nav>
                    <div class="nav_bar <?php echo get_theme_mod('thebox-menu_position') ?>">
                        <div class="nav_logo">
                            <a href="<?php echo home_url() ;?>"><img src=" <?php echo get_theme_mod('thebox-logo'); ?>" alt="logo"></a>
                        </div>
                        <div class="nav_manu">
                            <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                        </div>
                    </div>
                </nav>
            </div>
    </header>