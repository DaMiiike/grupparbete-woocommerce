<div class="footer-menu">

    <h2 class="footer_h2">Navigate</h2>

    <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>


</div>

<div class="footer-menu-two">

    <h2 class="footer_h2_two">Information</h2>

    <?php wp_nav_menu(array('theme_location' => 'footer_menu_two')); ?>

</div>

<h1 class="footer_title"><?php echo get_bloginfo('name'); ?></h1>

<?php
wp_footer(); 
?>

</body>

</html>