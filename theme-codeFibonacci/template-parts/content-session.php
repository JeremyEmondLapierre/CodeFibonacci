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

<div class="contenant-liste-cours">
    <?php while ( have_posts() ) :
        the_post();
        /* Tous les cours */
						if($_SERVER['QUERY_STRING'] == "filtre-cours=tous" || $_SERVER['QUERY_STRING'] == null):
							get_template_part( 'template-parts/content', 'cours' );
						/* Cours de Web */
						elseif(get_field('type_de_cours') == "Web" && $_SERVER['QUERY_STRING'] == "filtre-cours=web"):
							get_template_part( 'template-parts/content', 'cours' );
						/* Cours de 3D */
						elseif(get_field('type_de_cours') == "3D" && $_SERVER['QUERY_STRING'] == "filtre-cours=3D"):
							get_template_part( 'template-parts/content', 'cours' );
						/* Cours de monde professionel  */
						elseif(get_field('type_de_cours') == "Monde professionnel" && $_SERVER['QUERY_STRING'] == "filtre-cours=monde-professionnel"):
							get_template_part( 'template-parts/content', 'cours' );
						/* Cours de jeu vidéo  */
						elseif(get_field('type_de_cours') == "Jeu-vidéo" && $_SERVER['QUERY_STRING'] == "filtre-cours=jeu-video"):
							get_template_part( 'template-parts/content', 'cours' );
						/* Cours de Design  */
						elseif(get_field('type_de_cours') == "Design" && $_SERVER['QUERY_STRING'] == "filtre-cours=Design"):
							get_template_part( 'template-parts/content', 'cours' );
						/* Cours de vidéo  */
						elseif(get_field('type_de_cours') == "Vidéo" && $_SERVER['QUERY_STRING'] == "filtre-cours=video"):
							get_template_part( 'template-parts/content', 'cours' );
						/* Cours autres  */
						elseif(get_field('type_de_cours') == "Autres" && $_SERVER['QUERY_STRING'] == "filtre-cours=autres"):
							get_template_part( 'template-parts/content', 'cours' );
						endif;
    endwhile;
    ?>