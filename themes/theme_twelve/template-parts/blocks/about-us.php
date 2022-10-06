<div class="about-us-container">

<?php
    $image = get_field('about_image');


    if ($image) {
        $image_id = $image['id'];
        echo wp_get_attachment_image($image_id, 'large');
    }

    ?>

<h2><?php the_field('about_sub_heading'); ?></h2>

    <?php the_field('about_article'); ?>

</div>

