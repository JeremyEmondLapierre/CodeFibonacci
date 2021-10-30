<?php
/**
 * Template part pour l'affichage des images du carrousel de Vie Étudiante dans la page d'accueil 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>

<!-- Ca c'est comme "l'item" du carrousel. -->
<div class="accueil-vie-item swiper-slide">
    <!-- Les images dynamiques rentrent ici -->
    <?php the_post_thumbnail( 'thumbnail' ); ?>
</div>
