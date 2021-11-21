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

<div class="logique">
<h1>Enseignants</h1>	


<div class="accordion-body" id="logique">
<h2>Aspect <a>Logique</a></h2>

	<div class="dropdown">
	<button class="dropbtn" id="boutonLogique">Filtrer par : <a>Logique</a></button>
		<div class="dropdown-content">
			<button id="boutonCreatif" class="">Créatif</button>  
		</div>
	</div>


  <div class="accordion">
  	
    
	<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if(get_field('aspect') == "Logique"):
					get_template_part( 'template-parts/content', 'enseignants' );
				endif;
				endwhile;
		?>	
    

  </div>
  </div>


  <div class="accordion-body-pasActif" id="creatif">
  <h2>Aspect <a>creatif</a></h2>
  <div class="dropdown">
  <button class="dropbtn" id="boutonCreatif">Filtrer par : <a>Créatif</a></button>
  <div class="dropdown-content">
    <button id="boutonLogique" class="">Logique</button>  
  </div>
</div>
  


  <div class="accordion">
		<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			if(get_field('aspect') == "Creatif"):
				get_template_part( 'template-parts/content', 'Enseignants' );
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

const accordion = document.getElementsByClassName('container');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
  })
}

document.getElementById("boutonLogique").addEventListener("click", function() {
		console.log("Logique");
		//Gestion des boutons
		document.getElementById("boutonLogique").classList.add("dropbtn");
		document.getElementById("boutonCreatif").classList.remove("dropbtn");
		//Gestion des éléments
		document.getElementById("logique").classList.add("accordion-body");
		document.getElementById("logique").classList.remove("accordion-body-pasActif");
		document.getElementById("creatif").classList.add("accordion-body-pasActif");
		document.getElementById("creatif").classList.remove("accordion-body");

	});

	document.getElementById("boutonCreatif").addEventListener("click", function() {
		console.log("creatif");
		//Gestion des boutons
		document.getElementById("boutonCreatif").classList.add("dropbtn");
		document.getElementById("boutonLogique").classList.remove("dropbtn");
		//Gestion des éléments
		document.getElementById("logique").classList.add("accordion-body-pasActif");
		document.getElementById("logique").classList.remove("accordion-body");
		document.getElementById("creatif").classList.add("accordion-body");
		document.getElementById("creatif").classList.remove("accordion-body-pasActif");
	});
</script>