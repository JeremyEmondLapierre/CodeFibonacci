<?php
/**
 * Template part pour l'affichage des professeurs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>

<div class="item-enseignant">
    <div class="container">
        <div class="label">
            <?php the_post_thumbnail( 'medium' ); ?>
            <div class="contenu-titre-enseignant">
                <a><?php the_title() ?></a>
                <div class="contenant-icone-enseignant">
                    <!-- <i class="fas fa-times"></i> -->
                    <i class="fas fa-minus"></i>
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>
        <div class="description-enseignant">
            <?php the_content(); ?>
        </div>
    </div>
</div>