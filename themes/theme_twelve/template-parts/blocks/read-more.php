
Koden nedanför ska användas för att visa link, ej kodat färdigt denna sida

<div class="read-more-heading">

<?php the_field('sub_heading') ?> 

</div>
<?php 

$link = get_field('read_more_link');
if( $link ): ?>
    <a class="button" href="<?php echo esc_url( $link ); ?>">Continue Reading</a>
<?php endif; ?>