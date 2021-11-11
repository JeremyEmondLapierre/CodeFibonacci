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
<option value="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada quam eros, pulvinar tempor justo mollis quis. Donec fringilla viverra orci. Quisque ornare in urna sed pharetra. Cras tellus sapien, mollis nec mauris et, porttitor lobortis risus. Donec pulvinar magna quis dolor pretium, et vulputate ipsum tincidunt. Donec nec arcu eros. Aliquam erat volutpat. Donec sodales vitae velit eu elementum. Duis pulvinar convallis odio, eu commodo tortor ornare eget. Integer in arcu eu purus euismod tincidunt sed sed velit. Donec consectetur nisi velit, fringilla fermentum mi aliquam nec.</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Caroline Martin</option>
<option value="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada quam eros, pulvinar tempor justo mollis quis. Donec fringilla viverra orci. Quisque ornare in urna sed pharetra. Cras tellus sapien, mollis nec mauris et, porttitor lobortis risus. Donec pulvinar magna quis dolor pretium, et vulputate ipsum tincidunt. Donec nec arcu eros. Aliquam erat volutpat. Donec sodales vitae velit eu elementum. Duis pulvinar convallis odio, eu commodo tortor ornare eget. Integer in arcu eu purus euismod tincidunt sed sed velit. Donec consectetur nisi velit, fringilla fermentum mi aliquam nec.</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Camille Semaan</option>
<option value="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada quam eros, pulvinar tempor justo mollis quis. Donec fringilla viverra orci. Quisque ornare in urna sed pharetra. Cras tellus sapien, mollis nec mauris et, porttitor lobortis risus. Donec pulvinar magna quis dolor pretium, et vulputate ipsum tincidunt. Donec nec arcu eros. Aliquam erat volutpat. Donec sodales vitae velit eu elementum. Duis pulvinar convallis odio, eu commodo tortor ornare eget. Integer in arcu eu purus euismod tincidunt sed sed velit. Donec consectetur nisi velit, fringilla fermentum mi aliquam nec.</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Mathieu Dionne</option>
<option value="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada quam eros, pulvinar tempor justo mollis quis. Donec fringilla viverra orci. Quisque ornare in urna sed pharetra. Cras tellus sapien, mollis nec mauris et, porttitor lobortis risus. Donec pulvinar magna quis dolor pretium, et vulputate ipsum tincidunt. Donec nec arcu eros. Aliquam erat volutpat. Donec sodales vitae velit eu elementum. Duis pulvinar convallis odio, eu commodo tortor ornare eget. Integer in arcu eu purus euismod tincidunt sed sed velit. Donec consectetur nisi velit, fringilla fermentum mi aliquam nec.</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Vagharshak 'Vahik' Toroussian</option>
<option value="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada quam eros, pulvinar tempor justo mollis quis. Donec fringilla viverra orci. Quisque ornare in urna sed pharetra. Cras tellus sapien, mollis nec mauris et, porttitor lobortis risus. Donec pulvinar magna quis dolor pretium, et vulputate ipsum tincidunt. Donec nec arcu eros. Aliquam erat volutpat. Donec sodales vitae velit eu elementum. Duis pulvinar convallis odio, eu commodo tortor ornare eget. Integer in arcu eu purus euismod tincidunt sed sed velit. Donec consectetur nisi velit, fringilla fermentum mi aliquam nec.</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Johanne Massé</option>
<option value="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada quam eros, pulvinar tempor justo mollis quis. Donec fringilla viverra orci. Quisque ornare in urna sed pharetra. Cras tellus sapien, mollis nec mauris et, porttitor lobortis risus. Donec pulvinar magna quis dolor pretium, et vulputate ipsum tincidunt. Donec nec arcu eros. Aliquam erat volutpat. Donec sodales vitae velit eu elementum. Duis pulvinar convallis odio, eu commodo tortor ornare eget. Integer in arcu eu purus euismod tincidunt sed sed velit. Donec consectetur nisi velit, fringilla fermentum mi aliquam nec.</option>

</select>
</div>

<div class="custom-select">
<select>
<option value="0">Vincent Leblanc</option>
<option value="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada quam eros, pulvinar tempor justo mollis quis. Donec fringilla viverra orci. Quisque ornare in urna sed pharetra. Cras tellus sapien, mollis nec mauris et, porttitor lobortis risus. Donec pulvinar magna quis dolor pretium, et vulputate ipsum tincidunt. Donec nec arcu eros. Aliquam erat volutpat. Donec sodales vitae velit eu elementum. Duis pulvinar convallis odio, eu commodo tortor ornare eget. Integer in arcu eu purus euismod tincidunt sed sed velit. Donec consectetur nisi velit, fringilla fermentum mi aliquam nec.</option>

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
