<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

get_header();
?>
<?php
	$precedent = "XXXXXX";
?>
	<main id="primary" class="site-main integre" >
		<h1>Nos cours</h1>
		


			<!-- On doit en premier lieu aller regarder quelle est la valeur du string dans l'URL. Par la suite, modifier la 
			querry avec un "where" (?????) la variable du string - le champ type_de_cours. Si on peut aller chercher la valeur de query_string
			et ne pas ressortir le ?filtre-cours, avancement. On aurait juste à égaliser la value du dropdown avec la valeur du champ ACF -->

		<div class="contenant-cheminement">
			<h2>Grille de cheminement</h2>
			<!-- Filtre statique pour le sprint 3 -->
			<form>
				<label for="filtre-cours">Filtrer par : </label>
				<select id="filtre-cours" class="filtre-cours" name="filtre-cours">
					<option value="tous">Tous</option>
					<option value="web">Web</option>
					<option value="3D">3D</option>
					<option value="monde-professionnel" >Monde Professionnel</option>
					<option value="jeu-video">Jeu-Vidéo</option>
					<option value="Design">Design</option>
					<option value="video">Vidéo</option>
					<option value="autres">Autres</option>
				</select>
				<input type="submit">
			</form>
			<div class="contenant-tableau-cheminement">
				<div class="liste-cours">
				<!-- 
		|| Print de la session ||
		Logique:
			À chaque fois qu'on instantiate un élément, on regarde si le field session est égal à précédent.
			Si oui : On instantiate pas le get_field('session')
			Si non : On instantiate le get_field('session') et on réassocie la variable précédent
	 -->
	

				<?php

					/* Start the Loop */
					while ( have_posts() ) :
						if(get_field('session') != $precedent):?>
							<h6><?php echo get_field('session')?></h6>
							<?php $precedent = get_field('session');
						endif;
							
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
					
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
	get_sidebar();
	get_footer();
?>

<script>
	//Aller chercher la requête dans l'URL
	let filtreRecherche = window.location.search;
	//Aller sélectioner le select des filtres
	let filtreRechercheId = document.getElementById("filtre-cours");

	/* Mettre les selects des options selon la requête */
	if(filtreRecherche == "?filtre-cours=web"){
		filtreRechercheId.selectedIndex = 1;
	}

	if(filtreRecherche == "?filtre-cours=3D"){
		filtreRechercheId.selectedIndex = 2;
	}

	if(filtreRecherche == "?filtre-cours=monde-professionnel"){
		filtreRechercheId.selectedIndex = 3;
	}

	if(filtreRecherche == "?filtre-cours=jeu-video"){
		filtreRechercheId.selectedIndex = 4;
	}

	if(filtreRecherche == "?filtre-cours=Design"){
		filtreRechercheId.selectedIndex = 5;
	}

	if(filtreRecherche == "?filtre-cours=video"){
		filtreRechercheId.selectedIndex = 6;
	}

	if(filtreRecherche == "?filtre-cours=autres"){
		filtreRechercheId.selectedIndex = 7;
	}
	
</script>



