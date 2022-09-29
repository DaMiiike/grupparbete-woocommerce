<!-- Hero-block -->

<div class="the-hero-block">


    <h1><?php the_field('heading') ?></h1>

    <?php
    $image = get_field('image');

    if ($image) {
        $image_id = $image['id'];
        echo wp_get_attachment_image($image_id, 'full');
    }

    ?>


</div>