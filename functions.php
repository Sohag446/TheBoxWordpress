<?php
/*
*My Theme Function
*/

//All default theme functions here
include_once('inc/theme_function.php');

//Theme css and jQuery file calling

include_once('inc/file_enqueue.php');

// Menu Register
include_once('inc/menu_register.php');

// default Register
include_once('inc/default.php');

// Widgets Register
include_once('inc/widgets_register.php');

// custom post Register
include_once('inc/custom_post.php');

// custom Short code Register
include_once('inc/custom_shortcode.php');

// custom custom_taxonomy Register
include_once('inc/custom_taxonomy.php');

// custom articles_post Register
include_once('inc/articles_post.php');

// custom articles_taxonomy Register
include_once('inc/articles_taxonomy.php');