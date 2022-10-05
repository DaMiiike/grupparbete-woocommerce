<?php

/*Template Name: Stores */

get_header(); ?>


<h1><?php the_title(); ?></h1>

<div class="stores-group">
    <?php
    // Check rows existexists.
    if (have_rows('stores', 'option')) : ?>


        <?php while (have_rows('stores', 'option')) : the_row(); ?>

            <li class="stores-fields">

                <?php the_sub_field('address'); ?>

            </li>


        <?php endwhile; ?>

    <?php endif; ?>
</div>


<?php

get_footer();
