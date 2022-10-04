<div class="enviroment-container">

<?php the_field('enviroment_heading'); ?> 
<?php the_field('enviroment_text_area'); ?>

<?php 

$link = get_field('enviroment-link');
if( $link ): ?>
    <a class="button" href="<?php echo esc_url( $link ); ?>">Continue Reading</a>
<?php endif; ?>

</div>



