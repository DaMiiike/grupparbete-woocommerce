<?php

// Enable stylesheets 

function my_theme_enqueue_styles()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 11);

// Img/Tumbnail support

add_theme_support('post-thumbnails');



// Register menus

register_nav_menus(array(
  'main_menu' => 'Main Menu',
  'footer_menu' => 'Footer Menu',
  'footer_menu_two' => 'Secondary Footer Menu'
));

// Enable use of custom logo in theme 

add_theme_support('custom-logo');

// Adding Google Fonts 

function wpb_add_google_fonts()
{

  wp_enqueue_style('wpb-google-fonts', 'https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@300&display=swap', false);
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');


// Adding ACF block


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

    acf_register_block_type(array(
      'name'              => 'read more',
      'title'             => __('Read more'),
      'description'       => __('Image and text block with button to read more.'),
      'render_template'   => 'template-parts/blocks/read-more.php',
      'category'          => 'formatting',
      'keywords'          => array('readmore'),
    ));

    acf_register_block_type(array(
      'name'              => 'stores',
      'title'             => __('Stores'),
      'description'       => __('Custom block to display stores'),
      'render_template'   => 'template-parts/blocks/stores.php',
      'category'          => 'formatting',
      'keywords'          => array('readmore'),
    ));
  }
};


// Adding woocommerce support including default info img size and product grid

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


// Register new post type - Stores 

function create_posttype()
{
  register_post_type(
    'stores',
    // CPT Options
    array(
      'labels' => array(
        'name' => __('Stores'),
        'singular_name' => __('Store')
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'stores'),
    )
  );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
 
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Stores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Store', 'Post Type Singular Name', 'text_domain' ),
  );
	$args = array(
		'label'                 => __( 'Store', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'stores', $args );

}
add_action( 'init', 'custom_post_type', 0 );