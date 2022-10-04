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


// Register new custom post type - Stores 

 
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Stores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Store', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Stores', 'text_domain' ),
		'name_admin_bar'        => __( 'Stores', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'stores',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Store', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'stores', $args );

}
add_action( 'init', 'custom_post_type', 0 );