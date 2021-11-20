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
        //this.style.animation = "Croix forwards reverse ease-in-out";
    });
};

/* ----------------
    Page Stage
------------------- */    
document.getElementById("boutonATE").addEventListener("click", function() {
    //Gestion des boutons
    document.getElementById("boutonATE").classList.add("btnActif");
    document.getElementById("boutonFin").classList.remove("btnActif");
    //Gestion des éléments
    document.getElementById("ATE").classList.add("Actif");
    document.getElementById("ATE").classList.remove("PasActif");
    document.getElementById("FIN").classList.add("PasActif");
    document.getElementById("FIN").classList.remove("Actif");

});

document.getElementById("boutonFin").addEventListener("click", function() {
    //Gestion des boutons
    document.getElementById("boutonFin").classList.add("btnActif");
    document.getElementById("boutonATE").classList.remove("btnActif");
    //Gestion des éléments
    document.getElementById("ATE").classList.add("PasActif");
    document.getElementById("ATE").classList.remove("Actif");
    document.getElementById("FIN").classList.add("Actif");
    document.getElementById("FIN").classList.remove("PasActif");
});


