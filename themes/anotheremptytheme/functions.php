<?php

// enable stylesheets 

function theme_twelve_enqueue()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_twelve_enqueue');

// enable use of custom logo in theme 

add_theme_support( 'custom-logo' );