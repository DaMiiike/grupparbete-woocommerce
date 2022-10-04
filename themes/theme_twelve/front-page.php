<?php
get_header();
?>

<hr>
front page
<hr>

<?php 
$image = get_field('hero_image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

<?php
get_footer();
?>
