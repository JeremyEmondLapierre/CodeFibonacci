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

			<h3>Projets Étudiants</h3> 

			  

			  <div class="lesProjets">
			  	<?php
				/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						if(get_field('type') == "Projet"):
							get_template_part( 'template-parts/content', 'vie-projet' );
						endif;
					endwhile;
				?> 

					<div class="top-midle" >
							
						    <!--img ici-->
							<!--img ici-->		
				    </div>

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
