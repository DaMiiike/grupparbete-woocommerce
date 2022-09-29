
Koden nedanför ska användas för att visa link, ej kodat färdigt denna sida

<?php 
$link = get_field('link');
if( $link ): ?>
    <a class="button" href="<?php echo esc_url( $link ); ?>">Continue Reading</a>
<?php endif; ?>