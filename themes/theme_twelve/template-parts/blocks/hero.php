<!-- Hero-block -->

<div class="the-hero-block">

    <div class="hero-block-content">

        <h1><?php the_field('heading') ?></h1>

    </div>

    <?php
    $image = get_field('image');

    if ($image) {
        $image_id = $image['id'];
        echo wp_get_attachment_image($image_id, 'full');
    }

    ?>

</div>
