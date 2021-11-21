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
	<main id="primary" class="site-main integre" >
		<h1>Nos cours</h1>

		<div class="contenant-cheminement">
			<h2>Grille de cheminement</h2>
			<!-- Filtre statique pour le sprint 3 -->
			<form>
				<label for="filtre-cours">Filtrer par : </label>
				<select class="filtre-cours" name="filtre-cours">
					<option value="web">Web</option>
					<option value="3d">3D</option>
					<option value="monde-professionnel">Monde Professionnel</option>
					<option value="jeu-video">Jeu-Vidéo</option>
					<option value="Design">Design</option>
					<option value="video">Vidéo</option>
				</select>
				<input type="submit">
			</form>
			<div class="contenant-tableau-cheminement">
				<div class="liste-cours">
				<?php
							/* Start the Loop */
								while ( have_posts() ) :
									the_post();
										get_template_part( 'template-parts/content', 'cours' );
								endwhile;
							?>
					
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

?>

<script>

	
</script>


