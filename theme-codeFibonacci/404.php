<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package equipe-5
 */

get_header();
?>

	<main id="primary" class="site-main integre">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Page 404', 'equipe-5' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<div class="page-404-contenu">
					<h2>Cette page est malheureusement indisponible</h3>
					<p>Le lien que vous tentez de suivre est probablement rompu, supprimé ou inexistant.</p>
					<img class="page-404-img" src="<?php echo site_url().'/wp-content/uploads/2021/11/icone-404.svg';?>" alt="Icone d'un visage à la bouche tordue.">
					<a href="<?php echo home_url(); ?>">Retourner à la page d'accueil</a>
				</div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
