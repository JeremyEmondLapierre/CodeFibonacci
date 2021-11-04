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

			?>


			<?php
			 

		endif;
		
		?>

		<div id="accueil-prof">
    		<h1>Qu'est ce que le <strong>TIM</strong> ?</h1>
    		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

			<!-- Swiper -->
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">   
					<?php
					while ( have_posts() ) :
						the_post();
						if(get_field('type-article') == "Professeur"):  
							get_template_part( 'template-parts/content', 'prof' );
						endif;
					endwhile; 
					?>
				</div>

				<div class="swiper-pagination"></div>
				
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				

			</div>
		</div>
			
		
		<div class="accueil-cours" style="background-image: url('<?php echo site_url().'/wp-content/uploads/2021/11/accueil-bg-2.png';?>');">
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
		</div>

		<!-- Le contant du swiper au complet -->
		<div class="accueil-vie swiper" style="background-image: url('<?php echo site_url().'/wp-content/uploads/2021/11/accueil-bg-3.png';?>');">
			<h1>Vie étudiante</h1>
			<!-- Le contenant du carrousel des images UNIQUEMENT, pas de ses composantes -->
			<div class="accueil-vie-contenant swiper-wrapper">
				<?php
					// Ici il y a les slides individuelles
					while ( have_posts() ) :
						the_post();
						if(get_field('type-article') == "Vie-etudiante"): 
							get_template_part( 'template-parts/content', 'vie' );
						endif;
					endwhile; 
				?> 
			</div>

			<!-- Ci-dessous se trouvent les composantes du swiper -->
			<div class="swiper-pagination"></div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>


		
	</main><!-- #main -->


<?php
get_sidebar();
get_footer();
