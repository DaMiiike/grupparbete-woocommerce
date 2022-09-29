<?php

get_header();

if (have_posts()) {
?>
    <h3>Search results:</h3>

<?php
    while (have_posts()) {

        // Här kan ex. templatepart läggas in för att visa resultat.

    }
} else {
    echo '<p>Sorry no results where found</p>';
}

get_footer();
