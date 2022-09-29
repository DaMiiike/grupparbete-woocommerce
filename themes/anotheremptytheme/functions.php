<?php
add_action('wp_enqueue_scripts', 'anotheremptytheme_enqueue');

function anotheremptytheme_enqueue()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'acf/init', 'my_acf_init_block_types' );
function my_acf_init_block_types() {
    register_block_type( __DIR__ . '/blocks/testimonial' );
}