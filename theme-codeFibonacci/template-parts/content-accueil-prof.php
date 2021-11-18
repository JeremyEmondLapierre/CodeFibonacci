<?php
/**
 * Template part pour l'affichage des images profs dans la page d'accueil 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>
    <!-- Swiper des Professeurs-->
    <div class="swiper-slide">
        <div class="prof">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
    </div>
</html>