<?php

// enable stylesheets 

function my_theme_enqueue_styles()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 11);

// register menu

register_nav_menus(array(
  'main_menu' => 'Main Menu',
  'footer_menu' => 'Footer Menu'
));

// enable use of custom logo in theme 

add_theme_support('custom-logo');

// adding woocommerce support including default info img size and product grid

function mytheme_add_woocommerce_support()
{

  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 150,
    'single_image_width'    => 300,
    'product_grid'          => array(
      'default_rows'    => 4,
      'min_rows'        => 2,
      'max_rows'        => 8,
      'default_columns' => 4,
      'min_columns'     => 2,
      'max_columns'     => 3,
    ),
  ));
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
