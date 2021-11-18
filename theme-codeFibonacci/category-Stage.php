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
	<main id="primary" class="site-main pageStage integre">


			<h1>Stage</h1>
			<div class="filtre">
				<button id="boutonATE" class="btnActif"><h2>ATE</h2></button>
				<h2>-</h2>
				<button id="boutonFin" class=""><h2>Fin d'étude</h2></button>
			</div>

			

		<div id="ATE" class="Actif">
			<h2 class="benef">Les bénifices d'un stage ATE</h2>
			<div class="texteResume">
				<p>L’ATE est une approche de formation adaptée aux besoins changeants du marché du
				travail, où l’apprentissage intègre des séquences en classe et en entreprise. Les
				étudiants participent à au moins deux stages en entreprise, qui représentent au moins
				20% de la durée totale du programme d’études. La durée des stages est de 8 à 16 semaines consécutives, à raison de 28 heures par semaine en moyenne, pour un minimum de 224 heures. Les stages sont rémunérés par l’entreprise, car les heures en entreprise s’ajoutent à celles du programme d’études.</p>
			</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if(get_field('type_de_stage') == "ATE"):
					get_template_part( 'template-parts/content', 'Stage' );
				endif;
			endwhile;
		?>
			
			
		</div>

		<div id="FIN" class="PasActif">
			<h2 class="benef">Les bénifices d'un stage de fin d'étude</h2>
			<div class="texteResume">
				<p>Ce stage a pour but de placer l’étudiant dans une entreprise dans le but d’intégrer un emploi à plus long terme. Ce stage est très intéressant, car l’étudiant est à la fin de son parcours scolaire. Il a donc déjà développé la plupart des compétences qu’il devait acquérir à la suite de ses études. Ces stages sont plus communs en formation collégiale et professionnelle</p>
			</div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if(get_field('type_de_stage') == "Fin"):
					get_template_part( 'template-parts/content', 'Stage' );
				endif;
			endwhile;
		?>

			

		</div>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>

<script>

	document.getElementById("boutonATE").addEventListener("click", function() {
		console.log("Stage ATE");
		//Gestion des boutons
		document.getElementById("boutonATE").classList.add("btnActif");
		document.getElementById("boutonFin").classList.remove("btnActif");
		//Gestion des éléments
		document.getElementById("ATE").classList.add("Actif");
		document.getElementById("ATE").classList.remove("PasActif");
		document.getElementById("FIN").classList.add("PasActif");
		document.getElementById("FIN").classList.remove("Actif");

	});

	document.getElementById("boutonFin").addEventListener("click", function() {
		console.log("Fin d'étude");
		//Gestion des boutons
		document.getElementById("boutonFin").classList.add("btnActif");
		document.getElementById("boutonATE").classList.remove("btnActif");
		//Gestion des éléments
		document.getElementById("ATE").classList.add("PasActif");
		document.getElementById("ATE").classList.remove("Actif");
		document.getElementById("FIN").classList.add("Actif");
		document.getElementById("FIN").classList.remove("PasActif");
	});
</script>