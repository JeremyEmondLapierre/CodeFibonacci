<?php
/**
 * Template part pour l'affichage des témoignages dans la page des stages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>

    <div class="Exp">
        <div class="signetExp">
            <?php the_post_thumbnail( 'medium' ); ?>
            <h3><?php the_title() ?></h3>
            
        </div>

        <div class="texteExp">
            <p> <?php the_content(); ?> </p>
        </div>

		
        			
	</div>