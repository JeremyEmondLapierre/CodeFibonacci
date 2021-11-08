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


			<header class="page-header stage">
				<h1>Stage</h1>
			</header><!-- .page-header -->
			<div class="filtre">
				
				<button id="boutonATE"><h2>ATE</h2></button>
				<h2>-</h2>
				<button id="boutonFin"><h2>Fin d'étude</h2></button>
			</div>

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
?>

<script>

	document.getElementById("boutonATE").addEventListener("click", function() {
		console.log("Stage ATE");
		document.getElementById("boutonATE").classList.add("actif");
		document.getElementById("boutonFin").classList.remove("actif");
	});

	document.getElementById("boutonFin").addEventListener("click", function() {
		console.log("Fin d'étude");
		document.getElementById("boutonFin").classList.add("actif");
		document.getElementById("boutonATE").classList.remove("actif");
	});
</script>