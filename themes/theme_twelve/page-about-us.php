<?php
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

			<p><?php the_content(); ?></p>

		<?php endwhile; // end of the loop. ?>

<?php
get_footer();
?>
