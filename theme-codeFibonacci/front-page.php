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
    		<h1 id="prof-tim">Qu'est ce que le TIM ?</h1>
    		<p id="prof-tim2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		</div>

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
				<div class="swiper-button-next"></div>
      			<div class="swiper-button-prev"></div>
			</div>
			
		
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

		<!-- Slider main container -->
		<div class="swiper accueil-vie">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper accueil-vie-contenant">
			<!-- Slides -->
			<div class="swiper-slide accueil-vie-item">Slide 1</div>
			<div class="swiper-slide accueil-vie-item">Slide 2</div>
			<div class="swiper-slide accueil-vie-item">Slide 3</div>
		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

		<!-- If we need scrollbar -->
		<div class="swiper-scrollbar"></div>
		</div>


		
		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
