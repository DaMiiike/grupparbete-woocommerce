<?php
    $image = get_field('about_image');


    if ($image) {
        $image_id = $image['id'];
        echo wp_get_attachment_image($image_id, 'large');
    }

    $sub_heading = get_field('sub_heading');
    ?>