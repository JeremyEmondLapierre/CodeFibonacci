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
				<select class="filtre-cours" name="filtre-projet" id="filtre-projet" onchange="this.form.submit()">
					<option value="tous">Tous</option>
					<option value="web">Web</option>
					<option value="3d">3D</option>
					<option value="jeu-video">Jeu-Vidéo</option>
					<option value="Design">Design</option>
				</select>
			</form>

			  <div class="lesProjets">
			  	<?php
				/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						//Filtre pour afficher tous les cours
						if(($_SERVER['QUERY_STRING'] == "filtre-projet=tous" || $_SERVER['QUERY_STRING'] == null) && get_field('type') == "Projet"):
							get_template_part( 'template-parts/content', 'vie-projet' ); ?>
							<!-- Afficher la première grande section -->
							<div class="top-midle" style="background-image: url('<?php echo site_url().'/wp-content/uploads/2021/12/EmondLapierreJeremy_TP2_Affiche-scaled.jpg';?>'); background-position: 70% 30%; background-repeat: no-repeat; ">
				    		</div>

							<!-- Afficher la deuxième grande section -->
							<div class="midle" style="background-image: url('<?php echo site_url().'/wp-content/uploads/2021/11/Projet-13.jpg';?>'); background-position: center;" >
							</div>

							<!-- Afficher la troisième grande section -->
							<div class="bottom" style="background-image: url('<?php echo site_url().'/wp-content/uploads/2021/12/statue-3D-KevinLaRue.jpg';?>'); background-position: center;">
							</div>

					<?php
						/* Projet Web */
						elseif((get_field('type_de_projets') == "Web" ) && $_SERVER['QUERY_STRING'] == "filtre-projet=web"):
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

	
	const itemProjet = document.querySelectorAll('.normal');
	for (var i = 0; i < itemProjet.length; i++) {
		if (itemProjet[i] == 2) {
			this.classList.remove("normal");
		} else if (itemProjet[i] == 9) {
			this.classList.add("midle");
		};
		console.log(i);
	};


	
</script>