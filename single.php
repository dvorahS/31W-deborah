<?php
/**
    permet d'afficher un article à la fois
*/
get_header() ?>
<main>
    <h3>index.php</h3>
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        the_title('<h1>','</h1>');
        the_content(); /*affiche le contenu*/
    endwhile;
endif;
?>   
</main> 
<?php get_footer(); ?>

