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

	
	        <h1>Vie Étudiante</h1>
			<header class="page-header">
				<div>
				
				<h4>Accueil</h4>
				<h4>Vie Étudiante</h4>
				</div>
				
			</header><!-- .page-header -->

			<section class="gallerie-projets">

			<h3>Projets Étudiants</h3> 

			  <div class="lesProjets">

              <div class="bottom-box"></div>
              <div class="top-box"></div>
              
			  </div>


			</section>


			<section class="concours">

			<h3> <div>Concours&nbsp;</div> du programme</h3>

			<div class="lesConcours"> 

			  <div class="gameJam">

			  <img class="logo-concours" src='<?php echo site_url().'/wp-content/uploads/2021/10/unity.svg';?>';>

			    <h4>Game Jam</h4>

				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum corrupti necessitatibus provident error, eos aut impedit magni quae tenetur vero quis soluta, rerum blanditiis neque quas ratione expedita cumque dolorem?</p>

			  </div>

			  <div class="jour">

			  <img class="logo-concours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>

			    <h4>Jour de la terre</h4>

				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est corrupti, illo officia odit laboriosam placeat ea natus ullam, vitae provident nesciunt sunt! Neque reiciendis ut deleniti veniam necessitatibus quaerat reprehenderit?</p>

			  </div>

			</div>


			</section>





			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
