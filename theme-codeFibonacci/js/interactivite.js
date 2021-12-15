/**
 * Fichier navigation.js.
 *
 * Gère l'interactivité de tout le site
**/

/* ----------------
    Page Cours
------------------- */    

const cours = document.querySelectorAll('.contenant-cours');
  for (var i = 0; i < cours.length; i++) {
    cours[i].addEventListener('click', function() {
        console.log("ca a écouté");
        console.log(cours.length);
        //this.classList.toggle("actif-cours");
        //this.style.animation = "Croix forwards reverse ease-in-out";
        if(this.classList.contains("actif-cours")){
            this.classList.remove("actif-cours"); 
            this.classList.add("actif-cours-anim");
            //document.querySelector(".fa-minus:nth-child(1)").classList.add("actif-cours-anim"); 

        } else{
            this.classList.add("actif-cours");
            this.classList.remove("actif-cours-anim");
            //document.querySelector(".fa-minus:nth-child(1)").classList.remove("actif-cours-anim"); 
        }    
    });
    
};

/* ----------------
    Page Enseignants
------------------- */   

const accordion = document.getElementsByClassName('container');
for (i=0; i<accordion.length; i++) {
    accordion[i].addEventListener('click', function () {
        //this.classList.toggle('active');

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


