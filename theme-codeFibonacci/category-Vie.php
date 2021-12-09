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
	
	<main id="primary" class="site-main integre">
		<div>
	        <h1>Vie Étudiante</h1>
			<!--h4>Accueil</h4-->
			<!--h4>Vie Étudiante</h4-->
		</div>
			
		
			<section class="gallerie-projets">

			<h2>Projets Étudiants</h2> 

			   <!-- Filtre statique pour le sprint 3 -->
			<form>
				<label for="filtre-cours">Filtrer par : </label>
				<select class="filtre-cours" name="filtre-projet" id="filtre-projet">
					<option value="tous">Tous</option>
					<option value="web">Web</option>
					<option value="3d">3D</option>
					<option value="jeu-video">Jeu-Vidéo</option>
					<option value="Design">Design</option>
				</select>
				<input type="submit" value="Filtrer">
			</form>

			  <div class="lesProjets">

			  	<?php
				/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						if(($_SERVER['QUERY_STRING'] == "filtre-projet=tous" || $_SERVER['QUERY_STRING'] == null) && get_field('type') == "Projet"):
							get_template_part( 'template-parts/content', 'vie-projet' );
						/* Projet Web */
						elseif(get_field('type_de_projets') == "Web" && $_SERVER['QUERY_STRING'] == "filtre-projet=web"):
							get_template_part( 'template-parts/content', 'vie-projet' );
						/* Projet 3D */
						elseif(get_field('type_de_projets') == "3D" && $_SERVER['QUERY_STRING'] == "filtre-projet=3d"):
							get_template_part( 'template-parts/content', 'vie-projet' );
						/* Projet Jeu-vidéo */
						elseif(get_field('type_de_projets') == "Jeu-Vidéo" && $_SERVER['QUERY_STRING'] == "filtre-projet=jeu-video"):
							get_template_part( 'template-parts/content', 'vie-projet' );
						/* Projet Design */
						elseif(get_field('type_de_projets') == "Design" && $_SERVER['QUERY_STRING'] == "filtre-projet=Design"):
							get_template_part( 'template-parts/content', 'vie-projet' );
						endif;
					endwhile;
				?> 
				<!-- 
				|| Trois grosses sections ||
					Logique:
						
				-->

					<div class="midle" >
						 
					        <!--img ici-->
							<!--img ici-->
				    </div>

					
					<div class="bottom" >
							<!--img ici-->
							<!--img ici-->
				    </div>
					
					
					
					
			  </div>


			  </div>


			</section>


			<section class="concours"> 

				<h3> <div>Concours&nbsp;</div> du programme</h3>

				<div class="lesConcours">
					
				<?php
				
				/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						if(get_field('type') == "Concours"):
							get_template_part( 'template-parts/content', 'vie-concours' );
						endif;
					endwhile;
				?> 
				</div>
			</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>

<script>
	//Aller chercher la requête dans l'URL
	let filtreRecherche = window.location.search;
	//Aller sélectioner le select des filtres
	let filtreRechercheId = document.getElementById("filtre-projet");

	/* Mettre les selects des options selon la requête */
	if(filtreRecherche == "?filtre-projet=web"){
		filtreRechercheId.selectedIndex = 1;
	}

	if(filtreRecherche == "?filtre-projet=3d"){
		filtreRechercheId.selectedIndex = 2;
	}

	if(filtreRecherche == "?filtre-projet=jeu-video"){
		filtreRechercheId.selectedIndex = 3;
	}

	if(filtreRecherche == "?filtre-projet=Design"){
		filtreRechercheId.selectedIndex = 4;
	}
	/*let petit = document.querySelectorAll(".normal");
	console.log("Petite section: " + petit.length);

	let grosse = document.querySelectorAll(".grosse");
	console.log("Grosse section: " + grosse.length);

	var premier = document.querySelector(".normal:nth-child(2)")

	if(petit.length > 16){
		premier.classList.add("top-midle");
	}*///filtreRecherche
	
	const itemProjet = document.querySelectorAll('.normal');
	for (var i = 0; i < itemProjet.length; i++) {
		/*var topMiddle = itemProjet[i] = 7;
		topMiddle.classList.add("top-midle");*/

		if (itemProjet[i] == 2) {
			this.classList.remove("normal");
			//this.classList.add("top-midle");
		} else if (itemProjet[i] == 9) {
			this.classList.add("midle");
		};
		console.log(i);
	};


	
</script>