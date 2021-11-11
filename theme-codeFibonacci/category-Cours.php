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
	////PAGE COURS
	<main id="primary" class="site-main integre" >
		<h1>Nos cours</h1>

		<div class="contenant-cheminement">
			<div class="contenant-tableau-cheminement">
				<div class="liste-cours">
					<div class="item-cours">
						<h6>Session 1</h6>
						<div class="contenant-cours">
							<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
							<p>Mise en page Web</p>
						</div>
					</div>
					<div class="item-cours"></div>
					<div class="item-cours"></div>
					<div class="item-cours"></div>
					<div class="item-cours"></div>
					<div class="item-cours"></div>
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
