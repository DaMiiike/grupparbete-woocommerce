<?php

// enable stylesheets 

function my_theme_enqueue_styles()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 11);

// register menu

register_nav_menus( array(
  'main_menu' => 'Main Menu',
  'footer_menu' => 'Footer Menu'
) );

// enable use of custom logo in theme 

add_theme_support( 'custom-logo' );