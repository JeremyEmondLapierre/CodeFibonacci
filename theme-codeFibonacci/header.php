<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package equipe-5
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="wp-content/uploads/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'equipe-5' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			$equipe_5_description = get_bloginfo( 'description', 'display' );
			if ( $equipe_5_description || is_customize_preview() ) :
				?>
				
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="premierViewport">
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'equipe-5' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<h1>20 ans d'expérience</h1>

			<div class="conteneur-logo">
				
				<img class="fond-logo" src="wp-content/uploads/2021/09/background-logo.svg" alt="">
				<div class="logo" >
					<img src="wp-content/uploads/2021/09/logo-tim-2.svg" alt="">
					<?php
						if ( is_home() && is_front_page() ) :
					?>
						<h1>Techniques d'intégration multimédia</h1>
					<?php
						endif;
					?>
					
				</div>
			</div>
		</div>
			
		<!-- <svg class="background">
			<use href="wp-content/uploads/2021/09/background-1.svg"> </use>
		</svg> -->
		<img src="wp-content/uploads/2021/09/background-1.svg" alt="">
		
		
		
	</header><!-- #masthead -->
