<?php
/**
 * Template part pour l'affichage des concours
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>

<div class="concours">

    <?php the_post_thumbnail( 'medium' ); ?>

    <h4><?php the_title() ?></h4>

    <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 200, '...');?></p>
    <p class="suite"><a href="<?php the_permalink() ?>">Lire la suite...</a></p>

</div>