<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

get_header();
?>


	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			 

		endif;
		// Afficher la section de cours et de prof sur l'accueil

		get_template_part( 'template-parts/content', 'prof' );
		?>

		
		<div class="accueil-cours">
			<h1>Nos cours</h1>
			<section class="accueil-cours-contenant">
				<?php
				while ( have_posts() ) :
					the_post(); 
					
					if(get_field('type-article') == "accueil-cours"):
						get_template_part( 'template-parts/content', 'cours' );
					endif;
					
				endwhile; 
				?>
			</section>
			<img class="bg-cours-1" src="wp-content/uploads/bg-cours-1.svg"></img>
			<img class="bg-cours-2" src="wp-content/uploads/bg-cours-2.svg"></img>
		</div>

		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
