<?php
/**
 * Template part pour l'affichage de la liste des cours
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

 global $precedent;
?>

<?php 
if(get_field('session') != $precedent):?>
	<h6><?php echo get_field('session') ?></h6>
	<?php $precedent = get_field('session');
endif;
?>
		<!-- Single element à dupliquer -->
		<div class="contenant-cours">
			<div class="titre-cours">
                <?php the_post_thumbnail( 'medium' ); ?>
				<div class="contenu-titre-cours">
					<p><?php the_title() ?></p>
					<div class="contenant-icone-cours">
						<!-- <i class="fas fa-times"></i> -->
						<i class="fas fa-minus"></i>
						<i class="fas fa-minus"></i>
					</div>
				</div>
			</div>
			<div class="description-cours">
				<p><?php the_content(); ?> </p>
			</div>
		</div>
		<!-- Fin du single à dupliquer -->
		
	