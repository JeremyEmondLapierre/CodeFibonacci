<?php
/**
 * Template part pour l'affichage des professeurs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>

<div class="container">
    <div class="label">
        <?php the_post_thumbnail( 'medium' ); ?>
        <a><?php the_title() ?></a>
    </div>
    <div class="content">
        <?php the_content(); ?>
    </div>
</div>