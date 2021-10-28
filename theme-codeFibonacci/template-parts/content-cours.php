<?php
/**
 * Template part pour l'affichage des cours dans la page d'accueil 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe-5
 */

?>

            <?php
            /* Start the Loop */
            
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

                

    
    




