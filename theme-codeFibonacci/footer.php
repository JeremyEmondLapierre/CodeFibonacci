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

	  <img class="bg-footer" src="wp-content/uploads/back-footer.svg"></img>

 <div class="global-footer">

	 <img id="footer-logo" src="wp-content/uploads/footer-Logo.svg"></img>

	 <div class="site-info">

     <h3 id="site-info-titre">Site Info</h3>

	    <p>Campus principal</p>
	    <p>3800, rue Sherbrooke Est</p>
	    <p>Montréal (Québec) H1X 2A2</p>
	    <p>Tél.: 514 254-7131</p>
	    <p>communic@cmaisonneuve.qc.ca</p>
				
	 </div><!-- .site-info -->


	 <div class="liens-rapide">

	    
	
	 </div>

 </div>


	 <div id="footer-tag">

		
		<div id="div-texte-footer">Site départemental du TIM © 2021. Tout droits réservés</div>

		 

		<div id="div-texte-logo"> <img id="logo-FiboFooter" src="wp-content/uploads/petit-logo-Fibonacci.svg"></img>

			Conception et intégration du site par <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Thème: %1$s', 'equipe-5' ), 'Code Fibonacci.');
				?></div>
	 </div>

 

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
