<div class="footer-menu">

    <h2 class="footer_h2">Navigate</h2>
    <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>

    <h1 class="footer_title"><?php echo get_bloginfo('name'); ?></h1>
</div>

<?php

wp_footer(); ?>

</body>

</html>