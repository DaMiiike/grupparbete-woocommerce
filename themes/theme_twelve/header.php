<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>
  
  <?php wp_nav_menu( array('theme_location' => 'header-menu')); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>