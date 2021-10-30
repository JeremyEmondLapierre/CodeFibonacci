<?php
/**
 * Template part pour l'affichage des images profs dans la page d'accueil 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>
 

    <!-- Swiper -->
        <div class="swiper-slide">
            <div class="prof">
                <?php the_post_thumbnail( 'large' ); ?>
                
            </div>
        </div>

        


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   
  
</html>