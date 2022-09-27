<?php
add_action('wp_enqueue_scripts', 'anotheremptytheme_enqueue');

function anotheremptytheme_enqueue()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}
