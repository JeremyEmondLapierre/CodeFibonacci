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
	<main id="primary" class="site-main integre" >
		<h1>Nos cours</h1>

		<div class="contenant-cheminement">
			<h2>Grille de cheminement</h2>
			<!-- Filtre statique pour le sprint 3 -->
			<form>
				<label for="filtre-cours">Filtrer par : </label>
				<select class="filtre-cours" name="filtre-cours">
					<option value="web">Web</option>
					<option value="3d">3D</option>
					<option value="monde-professionnel">Monde Professionnel</option>
					<option value="jeu-video">Jeu-Vidéo</option>
					<option value="Design">Design</option>
					<option value="video">Vidéo</option>
				</select>
				<input type="submit">
			</form>
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
					<div id="item-cours" class="item-cours">
						<h6>Session 3</h6>
						<div id="contenant-cours" class="contenant-cours">
							<div class="titre-cours">
								<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
								<p>Création de site Web dynamiques</p>
							</div>
							<div class="description-cours">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae in expedita ullam velit officiis optio fuga cumque, vel ducimus voluptate aperiam dignissimos, ipsa debitis at quia asperiores quam eligendi consectetur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, iure reprehenderit. Eum facilis possimus eius a, odio ipsam quidem perferendis reiciendis. Quod voluptates tempora atque ad? Temporibus maxime magnam omnis!</p>
							</div>
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


	/*(function() {
		let contenant = document.querySelectorAll(".contenant-cours");

		for (var i = 0; i < contenant.length; i++) {
			contenant[i].addEventListener("click", function() {	
				contenant.classList.add("actif-cours");
				console.log("ca a écouté");
			});

		};
	});*/
	
	/*const parentCours = document.querySelectorAll("#item-cours")
	const cours = parentCours.querySelectorAll("#contenant-cours")
	for (const button of cours) {
		button.addEventListener('click', function(event) {
			cours.classList.add("actif-cours");
			console.log("ca a écouté");
		})
	}*/

	const cours = document.querySelectorAll('#contenant-cours');
		for (var i = 0; i < cours.length; i++) {
	    cours[i].addEventListener('click', function() {
			cours.classList.add("actif-cours");
			console.log("ca a écouté");
		});
	}

	document.addEventListener("click", fonctionAjoutClasseCours);

	function fonctionAjoutClasseCours() {
		//document.getElementById("item-cours").classList.add("actif-cours");
		console.log("ca a écouté");
	};

	document.getElementById("contenant-cours").addEventListener("click", displayDate);


	const element = document.querySelector(".contenant-cours");
	element.addEventListener("click", () => {
		console.log("clicked element");
	});
	
</script>


