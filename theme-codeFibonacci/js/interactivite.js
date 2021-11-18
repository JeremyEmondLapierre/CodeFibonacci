/**
 * Fichier navigation.js.
 *
 * Gère l'interactivité de tout le site
 */

/* ----------------
    Page Cours
------------------- */    

const cours = document.querySelectorAll('.contenant-cours');
for (var i = 0; i < cours.length; i++) {
    cours[i].addEventListener('click', function() {
        console.log("ca a écouté");
        console.log(cours.length);
        this.classList.toggle("actif-cours");
    });
};
