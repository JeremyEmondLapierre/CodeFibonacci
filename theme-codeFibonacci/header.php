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
	<link rel="icon" type="image/png" href='<?php echo site_url().'/wp-content/uploads/favicon.png';?>';>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fbd9ed4f7a.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if(!is_front_page()) : ?> style="background-image: url('<?php echo site_url().'/wp-content/uploads/2021/11/bg-header-integre.png';?>');" <?php endif ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'equipe-5' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				
				<?php
			else :
				?>
				
				<?php
			endif;
			$equipe_5_description = get_bloginfo( 'description', 'display' );
			if ( $equipe_5_description || is_customize_preview() ) :
				?>
				
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php if(is_home() && is_front_page()) :?>
		<div class="premierViewport">
			<nav id="site-navigation" class="main-navigation">
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						
					)
				);
		endif;
		?>
		<?php if(!is_front_page()) : ?>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				
			)
		);
		endif; ?>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'equipe-5' ); ?></button>
	
			</nav><!-- #site-navigation -->

			<?php
				if ( is_home() && is_front_page() ) :
			?>

			<div class="conteneur-logo">
				<img class="fond-logo" src="wp-content/uploads/logo-et-fond.svg" alt="">
				
				<!-- <img class="fond-logo" src="wp-content/uploads/2021/09/background-logo.svg" alt=""> -->
				<!-- <img src="wp-content/uploads/2021/09/logo-tim-2.svg" alt=""> -->
				
					<h1>Techniques d'intégration multimédia</h1>
				
					
			</div>

			

			<!-- <svg class="background">
			<use href="wp-content/uploads/2021/09/background-1.svg"> </use>
			</svg> -->
			<img class="banniere-avant-accueil" src="wp-content/uploads/2021/09/background-1.svg" alt="">
			<img class="banniere-accueil" src="wp-content/uploads/banniere-accueil.svg" alt="">

			<?php
				endif;
			?>
		</div>
			
		
		
		
		
	</header><!-- #masthead -->
