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
			<button id="boutonCreatif" class="" value="ovo" onclick="f();">Créatif</button>  
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
  <button class="dropbtn" id="boutonCreatif">Filtrer par : <a> Créatif</a></button>
  <div class="dropdown-content">
    <button id="boutonLogique" class="" value="oxo" onclick="c();">Logique</button>  
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

	function c(){
		console.log("logique");
		
		document.getElementById("creatif").style.display = 'none';
		document.getElementById('logique').style.display='block';
	}

	function f(){
		console.log("creatif2");
		
		document.getElementById("logique").style.display = 'none';
		document.getElementById('creatif').style.display='block';
	}
</script>
