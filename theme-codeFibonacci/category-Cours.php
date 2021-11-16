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
	////PAGE COURS
	<main id="primary" class="site-main integre" >
		<h1>Nos cours</h1>

		<div class="contenant-cheminement">
			<h2>Grille de cheminement</h2>

			<div class="contenant-tableau-cheminement">
				<div class="liste-cours">
					<div class="item-cours">
						<h6>Session 1</h6>
						<div class="contenant-cours">
							<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
							<p>Mise en page Web</p>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 2</h6>
						<div class="contenant-cours">
							<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
							<p>Animation et interactivité Web</p>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 3</h6>
						<div class="contenant-cours">
							<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
							<p>Création de site Web dynamiques</p>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 4</h6>
						<div class="contenant-cours">
							<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/database.svg';?>';>
							<p>Conception d'interface et développement Web</p>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 5</h6>
						<div class="contenant-cours">
							<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
							<p>Projet Web en équipe</p>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 6</h6>
						<div class="contenant-cours">
							<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
							<p>Aucun cours prévu</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		/* Start the Loop */
		

		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

?>

<script>
	document.querySelector(".contenant-cours").addEventListener("click", function() {
		console.log('ca fonctionne avec querySelector');
	});
	document.querySelectorAll(".contenant-cours").addEventListener("click", function() {
		console.log('ca fonctionne avec querySelectorAll');
	});
	document.getElementsByClassName("contenant-cours").addEventListener("click", function() {
		console.log('ca fonctionne avec getElementsByClassName');
	});
	/*
	document.querySelectorAll(".item-cours").addEventListener("click", function() {
		console.log("beep");
		element.classList.add("cours-actif");
	})*/

</script>


