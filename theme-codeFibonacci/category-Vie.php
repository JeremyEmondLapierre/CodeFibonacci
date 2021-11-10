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
	
	<main id="primary" class="site-main">

	

			<header class="page-header">
				<h1>Vie Étudiante</h1>
			</header><!-- .page-header -->

			<section class="gallerie-projets">

			<h3>Projets Étudiants</h3>

			  <div class="lesProjets">

			  
			  </div>


			</section>


			<section class="concours">

			<h3>Concours du programme</h3>


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
