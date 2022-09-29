<?php

// enable stylesheets 

function my_theme_enqueue_styles()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 11);

// support img

add_theme_support('post-thumbnails');



// register menu

register_nav_menus(array(
  'main_menu' => 'Main Menu',
  'footer_menu' => 'Footer Menu'
));

// enable use of custom logo in theme 

add_theme_support('custom-logo');

// Adding Google Fonts 

function wpb_add_google_fonts() {
 
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@300&display=swap', false ); 
  }
   
  add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
  
// ACF block

add_action('acf/init', 'my_acf_init_block_type');
function my_acf_init_block_type()
{

  if (function_exists('acf_register_block_type')) {

    acf_register_block_type(array(
      'name'              => 'hero',
      'title'             => __('Hero'),
      'description'       => __('Hero block for frontpage.'),
      'render_template'   => 'template-parts/blocks/hero.php',
      'category'          => 'formatting',
      'keywords'          => array('hero'),
    ));
  }
}


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
