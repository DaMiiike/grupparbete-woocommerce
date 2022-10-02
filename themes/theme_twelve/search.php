<?php

get_header(); 


if (have_posts()) :
?>
   
   Sökresultat:

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/posts-block'); ?>
    
    <?php endwhile; ?>

        
<?php

endif; 

get_footer(); ?>
