/**
 * Fichier navigation.js.
 *
 * Gère l'interactivité de tout le site
**/

/* ----------------
    Page Cours
------------------- */    

const cours = document.querySelectorAll('.contenant-cours');
let coursPrecedent;
  for (var i = 0; i < cours.length; i++) {
    cours[i].addEventListener('click', function() {
        if(coursPrecedent) {
            // on enregistre le cours cliqué dans coursPrecedent. Si elle existe déjà, on enlève actif-cours
            coursPrecedent.classList.remove('actif-cours');
        }
        coursPrecedent = this;
        if(this.classList.contains("actif-cours")){
            this.classList.remove("actif-cours"); 
            this.classList.add("actif-cours-anim");

        } else{
            this.classList.add("actif-cours");
            this.classList.remove("actif-cours-anim");
        };
     
    });
    
};

/* ----------------
    Page Enseignants
------------------- */   

const accordion = document.getElementsByClassName('container');
let profPrecedent;
for (i=0; i<accordion.length; i++) {
    accordion[i].addEventListener('click', function () {
        //this.classList.toggle('active');
        if(profPrecedent) {
            // on enregistre le cours cliqué dans profPrecedent. Si elle existe déjà, on enlève active
            profPrecedent.classList.remove('active');
        }
        profPrecedent = this;

        if(this.classList.contains("active")){
            this.classList.remove("active"); 
            this.classList.add("active-prof-anim");

        } else{
            this.classList.add("active");
            this.classList.remove("active-prof-anim");
        }    
    })
}


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


