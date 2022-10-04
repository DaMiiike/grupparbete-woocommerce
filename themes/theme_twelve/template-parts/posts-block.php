<div class="posts-block">

<?php the_post_thumbnail('small'); ?>
<h1><?php the_title();?></h1>
<span><?php the_time(get_option('date_format')); ?></span>

<article>
    <?php the_excerpt(); ?>
</article>

<a href="<?php the_permalink(); ?>">Tryck här för mer info</a>
</div>