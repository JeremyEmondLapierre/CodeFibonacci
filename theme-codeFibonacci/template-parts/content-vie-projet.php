<?php
/**
 * Template part pour l'affichage des projets dans la page vie étudiante
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */



?>

<div >
    <div class="normal">
        <a href="<?php the_permalink(); ?>";>
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    </div>
</div>