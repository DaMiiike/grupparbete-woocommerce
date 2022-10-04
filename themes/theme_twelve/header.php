<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>
  
  <?php wp_nav_menu( array('theme_location' => 'main_menu')); ?>
</head>

<div class="search-bar">
    <?php get_search_form ();?>
</div>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>