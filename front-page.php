<?php
/**
    Modèle page d'accueil front-page
*/
get_header() ?>
<main>
    <code>front-page.php</code>
    <h3>index.php</h3>
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        //the_title('<h1>','</h1>');
        //the_permalink();?>

        <h1><a href="<?php the_permalink(); ?>"> <?= get_the_title() ?> </a></h1>
        <!-- sert a rendre la navigation foctionnelle --> 

<?php 
        /*the_content(); //affiche le contenu*/
        /*the_excerpt(); //affiche le resumé ; c'est un echo*/
        echo wp_trim_words(get_the_excerpt(), 4); /*deuxieme para nbre de mots, 3eme optionnel (lien); retour chaine de carractere*/
    endwhile;
endif;
?>   
</main> 
<?php get_footer(); ?>

