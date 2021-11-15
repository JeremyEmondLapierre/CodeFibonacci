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
	//PAGE ENSEIGNANTS
	<main id="primary" class="site-main">
<h1>ENSEIGNANTS</h1>
<div class="logique"><h2>Aspect Logique</h2>

<div class="dropdown">
  <button class="dropbtn">Filtrer par : Logique</button>
  <div class="dropdown-content">
    <a href="#">Créatif</a>  
  </div>
</div>

<div class="prof-logi">

<div class="custom-select">
<select>
<option value="0">Martin Eddy</option>
<option value="1">
Des études en mathématiques informatiques (B.Sc) et une maîtrise en traitement d'images à l'UQAM m'ont amené à m'intéresser plus particulièrement à la programmation Web.

J'ai côtoyé l'industrie pendant plusieurs années comme programmeur analyste pour finalement trouvé ma vocation en enseignement au Collège de maisonneuve.

Les sujets qui m'intéressent touchent directement la création de sites Web adaptatifs du côté client et serveur.

J'enseigne au département TIM depuis 2001.

</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Caroline Martin</option>
<option value="1">On me traite de Geek car je programme en PHP depuis pratiquement sa création et bien avant sa réelle utilisation dans les sites Web. J'aime, voire, je suis passionnée par la programmation informatique. Je joue à D&D mais je ne suis pas que cela !</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Camille Semaan</option>
<option value="1">Ma vocation : communiquer connaissances et savoir-faire.
                  Ma devise : «Comprendre et ne pas juger» (Georges Simenon)
                  On a tout notre temps.
</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Mathieu Dionne</option>
<option value="1">Prof « Made in Maisonneuve ! » Je hante ces corridors depuis si longtemps… Eh oui…j’ai fait mes études collégiales ici même ! J’y suis revenu après mes études universitaires à l’UQAM, en communication, concentration multimédia interactive.
J’enseigne la création de jeux vidéo et l’environnement sonore aux étudiants du programme TIM depuis 2002. Du point de vue professionnel, mes réalisations incluent notamment la mise au point du cours «Développement de l’enfant et de l’adolescent», pour le compte du Cégep @ distance, qui a remporté le prix de l’excellence en conception pédagogique de l’ACED en 2003, le site Web de Kid A, un groupe hommage à Radiohead, et bien d’autres encore.
</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Vagharshak 'Vahik' Toroussian</option>
<option value="1">J’enseigne au Collège de Maisonneuve depuis 10 ans où j’occupe d’ailleurs le rôle de coordonnateur du programme des Techniques d’intégration multimédia.
J’ai fait mes études à l’Université de Montréal et obtenu une maîtrise en traitement de l’image. Ma spécialité est en programmation sur support et j’entends vous faire apprécier l’incroyable potentiel de ce volet multimédia.

Ce qui vous attend : des travaux pratiques sous forme de jeux (casse-tête, quêtes, etc.) et la création de prototypes de jeux avec Virtools. Message à ceux qui aiment bien équilibrer travail et activité physique : je suis toujours disponible pour une partie de soccer… à bon entendeur salut!

</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Johanne Massé</option>
<option value="1">
Je suis gestionnaire de projet et architecte-paysagiste de formation mais, paradoxalement, passionnée depuis toujours par les 0 et les 1... J'ai cofondé à la fin des années 80 une entreprise spécialisée dans le développement de logiciels pour l'aménagement du territoire.

À l'aube du nouveau millénaire, j'ai fait le grand saut et réorienté ma carrière en multimédia. J’ai fait mes débuts à titre de consultante et j'exerce la profession d'enseignante depuis 2001. Vous devinerez par la maxime d'introduction que j'ai un petit faible pour la gestion de projets multimédias.

Mais ce n'est pas mon seul dada, je me passionne aussi pour les logiciels-auteurs et la programmation, notamment Flash et ActionScript. Parallèlement à mes activités d'enseignante, je poursuis également une maîtrise en pédagogie.

</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Vincent Leblanc</option>
<option value="1">Mon séjour au Collège de Maisonneuve a débuté à l’automne 2001. J’ai donné mes premiers cours au Département TIM à l’hiver 2002. J’ai été formé à l’École de Technologie Supérieure (génie), à l’Université de Montréal (communication) et à l’Université Bishops (arts visuels).
Ces dernières années, j’ai surtout donné les cours de création Web de 1ère année du programme de TIM , ainsi que le cours Production artistique et arts médiatiques, en 3ème session du  programme Science, Lettres et Arts. Je suis aussi un des représentants à la coordination départementale depuis la session d’automne 2018. Durant mes temps libres, j’aime faire plusieurs choses, mais je préfère par-dessus tout : dormir!</option>

</select>
</div>

</div>

</div>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
