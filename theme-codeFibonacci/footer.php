<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package equipe-5
 */

 /*OWO*/ 
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
				
		</div><!-- .site-info -->

		<div id="footer-tag">
			
			<a>Site départemental du TIM © 2021. Tout droits réservés</a>

			<a>Conception et intégration du site par <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Thème: %1$s', 'equipe-5' ), 'Code Fibonacci.');
				?></a>

		
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
