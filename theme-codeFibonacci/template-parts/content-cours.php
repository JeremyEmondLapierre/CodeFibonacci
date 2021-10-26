<?php
/**
 * Template part pour l'affichage des cours dans la page d'accueil 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>

<!-- Affichage statique

<div class="accueil-cours">
    <h1>Nos cours</h1>
    <div class="accueil-cours-contenant">
        <div class="accueil-cours-gauche">
            <div class="cours-contenu">
                <div class="accueil-cours-texte">
                    <h2>Web</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-sphere">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-sphere"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="accueil-cours-droite">
            <div class="cours-contenu">
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-film">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-film"></use>
                    </svg>
                </a>
                <div class="accueil-cours-texte">
                    <h2>Création Vidéo</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
            </div>
        </div>
        <div class="accueil-cours-droite">
            <div class="cours-contenu">
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-database">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-database"></use>
                    </svg>
                </a>
                <div class="accueil-cours-texte">
                    <h2>Web dynamique</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
            </div>
        </div>
        <div class="accueil-cours-gauche">
            <div class="cours-contenu">
                <div class="accueil-cours-texte">
                    <h2>Design</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-font">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-font"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="accueil-cours-droite">
            <div class="cours-contenu">
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-database">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-database"></use>
                    </svg>
                </a>
                <div class="accueil-cours-texte">
                    <h2>3D</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
            </div>
        </div>
        <div class="accueil-cours-gauche">
            <div class="cours-contenu">
                <div class="accueil-cours-texte">
                    <h2>Gestion de projets</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-font">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-font"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="accueil-cours-droite">
            <div class="cours-contenu">
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-unity">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-unity"></use>
                    </svg>
                </a>
                <div class="accueil-cours-texte">
                    <h2>Jeu-Vidéo</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
            </div>
        </div>
        <div class="accueil-cours-gauche">
            <div class="cours-contenu">
                <div class="accueil-cours-texte">
                    <h2>Wordpress</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate ex suscipit fugiat porro, ea quasi perspiciatis natus quibusdam officia.</p>
                </div>
                <a href="https://eddym12.sg-host.com/cours">
                    <svg class="icon icon-wordpress">
                        <use xlink:href="wp-content/uploads/2021/icones.svg#icon-wordpress"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

-->

<div class="accueil-cours">
    <?php if ( have_posts() ) : ?>
        <h1>Nos cours</h1>
        <section class="accueil-cours-contenant">
        
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post(); 
                if(get_field('type-article') == "accueil-cours"):
                ?>
                
                    <div class="accueil-cours-item" >

                        <div class="cours-contenu">
                            <div class="accueil-cours-texte">
                                <h2>
                                    <a href="<?php if($_SERVER['SERVER_NAME'] == "localhost"){ echo "http://";} else {echo "https://";}?><?php echo $_SERVER['HTTP_HOST']; ?><?php if($_SERVER['SERVER_NAME'] == "localhost"){ echo $_SERVER['REQUEST_URI'];}?>/cours/">
                                    <?php the_title() ?>
                                    </a>
                                </h2>
                                <p> <?php the_content(); ?> </p>
                            </div>
                            <div class="accueil-cours-icon">
                                <!-- Selon si on est en ligne ou en local, on change la pathing pour qu'on se fasse bien envoyer
                                sur la page de cours -->
                                <a href="<?php if($_SERVER['SERVER_NAME'] == "localhost"){ echo "http://";} else {echo "https://";}?><?php echo $_SERVER['HTTP_HOST']; ?><?php if($_SERVER['SERVER_NAME'] == "localhost"){ echo $_SERVER['REQUEST_URI'];}?>/cours/">
                            
                                <?php  ?>
                                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                                </a>
                            </div>  
                        </div>
                    </div>

                <?php 
                endif;
                endwhile; ?>
        </section>
    <?php endif; ?>

    <img class="bg-cours-1" src="wp-content/uploads/bg-cours-1.svg"></img>
    <img class="bg-cours-2" src="wp-content/uploads/bg-cours-2.svg"></img>
</div>



