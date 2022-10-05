<div class="enviroment-container">

    <h1 class="enviroment-heading">
        <?php the_field('enviroment_heading'); ?>
    </h1>

    <article class="enviroment-text">
        <?php the_field('enviroment_text_area'); ?>
    </article>


    <div class="enviroment-link">
        <?php
        $link = get_field('enviroment_link');
        if ($link) : ?>
            <a class="button" href="<?php echo esc_url($link); ?>">Continue Reading</a>
        <?php endif; ?>
    </div>


</div>