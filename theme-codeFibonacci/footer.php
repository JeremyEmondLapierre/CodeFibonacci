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

<footer id="colophon" class="site-footer" 
style="background-image: url('<?php echo site_url().'/wp-content/uploads/2021/12/footer-bg.svg';?>');">

 <div class="global-footer" >

	 
	<div class="logoEtReseau">
		<img id="footer-logo" src='<?php echo site_url().'/wp-content/uploads/2021/11/footer-LogoVert.svg';?>';>
		<div class="Reseau">
			<h3>Suivez-nous</h3>
			<ul>
				<li>
				<a href="https://www.facebook.com/maisonneuvetim/">
					<img src="<?php echo site_url().'/wp-content/uploads/2021/11/facebook.svg';?>" alt="">
				</a>
			    </li>

				<li>
			
				<a href="https://www.instagram.com/maisonneuvetim/">
					<img src="<?php echo site_url().'/wp-content/uploads/2021/11/instagram.svg';?>" alt="">
				</a>
				</li>

				<li>
				<a href="https://ca.linkedin.com/in/tim-maisonneuve-b7a609b3">
					<img src="<?php echo site_url().'/wp-content/uploads/2021/11/linkedin.svg';?>" alt="">
				</a>
				</li>

				<li>
				<a href="https://www.youtube.com/user/TIMaisonneuve">	
					<img src="<?php echo site_url().'/wp-content/uploads/2021/11/youtube.svg';?>" alt="">
				</a>
				</li>
			</ul>
		</div>
	</div>
     



	 <div class="site-info">

     <h3 id="site-info-titre">Infos du collège</h3>

	    <p>Campus principal</p>
	    <p>3800, rue Sherbrooke Est</p>
	    <p>Montréal (Québec) H1X 2A2</p>
	    <p>Tél.: 514 254-7131</p>
	    <p>communic@cmaisonneuve.qc.ca</p>
				
	 </div><!-- .site-info -->


	 <div class="liens-rapides">

	 <h3 id="liens-rapides-titre">Liens Rapides</h3>

			<nav  class="footer-navigation">
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-3',
						
					)
				);
		
		?>


     	
	
	 </div>
	 <div class="google-map">
	 	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d22346.240668199367!2d-73.566623110933!3d45.56480596253174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scegep%20maisonneuve%20%C3%A0%20proximit%C3%A9%20de%20Rue%20Sherbrooke%20Est%2C%20Qu%C3%A9bec!5e0!3m2!1sfr!2sca!4v1635702843327!5m2!1sfr!2sca" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	 </div>
	 <div class="up">
	 	<img id="flecheHaut" onClick="topFunction()" src='<?php echo site_url().'/wp-content/uploads/2021/11/FlecheFooterVert.svg';?>';>
	 </div>

 </div>


	 <div id="footer-tag">

		
		<div id="div-texte-footer">Site départemental du TIM © 2021. Tout droits réservés</div>

		 

		<div id="div-texte-logo"> 
			
		
		<img id="logo-FiboFooter" src='<?php echo site_url().'/wp-content/uploads/2021/11/petit-logo-Fibonacci.png';?>';>

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

<script>
	//Sélectionner l'image:
	//imageUp = document.getElementById("flecheHaut");

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
  	document.body.scrollTop = 0; // For Safari
  	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>