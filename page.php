<?php

/**
 * Loads static page like contact,homepage,landing page etc.
 */
get_header();
?>
<main class="main"> 
    <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();

                the_content();
            }
        } else {
            echo '<h3>No Page data </h3>';
        }

    ?>
</main>
<?php
    get_footer();
