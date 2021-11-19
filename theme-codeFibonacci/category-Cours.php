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
					<div class="item-cours">
						<h6>Session 1</h6>
						<div class="contenant-liste-cours">
							<div class="contenant-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Mise en page Web</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid expedita ipsum aspernatur consectetur, nesciunt eius quo architecto sunt maiores, eos amet, rem voluptatum voluptas voluptatem laboriosam illo? Fuga, quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe, omnis delectus error esse vitae tempora expedita eveniet ipsam eum laudantium doloribus illo, dolorum minima doloremque, numquam dignissimos nostrum natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dicta distinctio exercitationem voluptatem aliquam saepe soluta reprehenderit, odit expedita, perspiciatis, mollitia facere nihil. Aliquid veniam fuga adipisci hic eligendi voluptas.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 2</h6>
						<div class="contenant-liste-cours">
							<div class="contenant-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Animation et interactivité Web</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid expedita ipsum aspernatur consectetur, nesciunt eius quo architecto sunt maiores, eos amet, rem voluptatum voluptas voluptatem laboriosam illo? Fuga, quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe, omnis delectus error esse vitae tempora expedita eveniet ipsam eum laudantium doloribus illo, dolorum minima doloremque, numquam dignissimos nostrum natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dicta distinctio exercitationem voluptatem aliquam saepe soluta reprehenderit, odit expedita, perspiciatis, mollitia facere nihil. Aliquid veniam fuga adipisci hic eligendi voluptas.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div id="item-cours" class="item-cours">
						<h6>Session 3</h6>
						<div class="contenant-liste-cours">
							<div id="contenant-cours" class="contenant-cours actif-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Création de site Web dynamiques</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Dans ce cours, l’étudiant poursuit son apprentissage de l’intégration de sites Web dynamiques à l’aide d’un gestionnaire de contenu. L’étudiant apprend à développer par programmation des thèmes personnalisés pour répondre aux besoins spécifiques du design d’interfaces des sites Web. L’étudiant apprend aussi les fonctionnalités avancées du gestionnaire de contenu, lui permettant entre autres de programmer des extensions servant les fonctionnalités des sites Web à développer. De plus, l’étudiant est initié à l’utilisation et à l’intégration par programmation des bases de données. Ce cours couvre également l’intégration et l'interface entre le langage utilisé du côté du serveur et les technologies utilisées du côté client. Enfin, l’étudiant poursuit son apprentissage des techniques de test pour contrôler la qualité d’un site Web et valider sa conformité en regard des normes et des standards en vigueur.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 4</h6>
						<div class="contenant-liste-cours">
							<div class="contenant-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/database.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Conception d'interface et développement Web</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid expedita ipsum aspernatur consectetur, nesciunt eius quo architecto sunt maiores, eos amet, rem voluptatum voluptas voluptatem laboriosam illo? Fuga, quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe, omnis delectus error esse vitae tempora expedita eveniet ipsam eum laudantium doloribus illo, dolorum minima doloremque, numquam dignissimos nostrum natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dicta distinctio exercitationem voluptatem aliquam saepe soluta reprehenderit, odit expedita, perspiciatis, mollitia facere nihil. Aliquid veniam fuga adipisci hic eligendi voluptas.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 5</h6>
						<div class="contenant-liste-cours">
							<div class="contenant-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Projet Web en équipe</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid expedita ipsum aspernatur consectetur, nesciunt eius quo architecto sunt maiores, eos amet, rem voluptatum voluptas voluptatem laboriosam illo? Fuga, quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe, omnis delectus error esse vitae tempora expedita eveniet ipsam eum laudantium doloribus illo, dolorum minima doloremque, numquam dignissimos nostrum natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dicta distinctio exercitationem voluptatem aliquam saepe soluta reprehenderit, odit expedita, perspiciatis, mollitia facere nihil. Aliquid veniam fuga adipisci hic eligendi voluptas.
									</p>
								</div>
							</div>
							<div class="contenant-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Bippidy Boppidy</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid expedita ipsum aspernatur consectetur, nesciunt eius quo architecto sunt maiores, eos amet, rem voluptatum voluptas voluptatem laboriosam illo? Fuga, quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe, omnis delectus error esse vitae tempora expedita eveniet ipsam eum laudantium doloribus illo, dolorum minima doloremque, numquam dignissimos nostrum natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dicta distinctio exercitationem voluptatem aliquam saepe soluta reprehenderit, odit expedita, perspiciatis, mollitia facere nihil. Aliquid veniam fuga adipisci hic eligendi voluptas.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item-cours">
						<h6>Session 6</h6>
						<div class="contenant-liste-cours">
							<div class="contenant-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Aucun cours prévu</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid expedita ipsum aspernatur consectetur, nesciunt eius quo architecto sunt maiores, eos amet, rem voluptatum voluptas voluptatem laboriosam illo? Fuga, quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe, omnis delectus error esse vitae tempora expedita eveniet ipsam eum laudantium doloribus illo, dolorum minima doloremque, numquam dignissimos nostrum natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dicta distinctio exercitationem voluptatem aliquam saepe soluta reprehenderit, odit expedita, perspiciatis, mollitia facere nihil. Aliquid veniam fuga adipisci hic eligendi voluptas.
									</p>
								</div>
							</div>
							<div class="contenant-cours">
								<div class="titre-cours">
									<img class="logo-cours" src='<?php echo site_url().'/wp-content/uploads/2021/10/sphere.svg';?>';>
									<div class="contenu-titre-cours">
										<p>Omelette du fromage</p>
										<div class="contenant-icone-cours">
											<!-- <i class="fas fa-times"></i> -->
											<i class="fas fa-minus"></i>
											<i class="fas fa-minus"></i>
										</div>
									</div>
								</div>
								<div class="description-cours">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid expedita ipsum aspernatur consectetur, nesciunt eius quo architecto sunt maiores, eos amet, rem voluptatum voluptas voluptatem laboriosam illo? Fuga, quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe, omnis delectus error esse vitae tempora expedita eveniet ipsam eum laudantium doloribus illo, dolorum minima doloremque, numquam dignissimos nostrum natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dicta distinctio exercitationem voluptatem aliquam saepe soluta reprehenderit, odit expedita, perspiciatis, mollitia facere nihil. Aliquid veniam fuga adipisci hic eligendi voluptas.
									</p>
								</div>
							</div>
							
						</div>
					</div>
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


