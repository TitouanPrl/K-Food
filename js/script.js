/* Incrémente le compteur */
function addCpt(tmp) {
    var cpt = document.getElementsByClassName("AffCompteur")[tmp].textContent;
    var butP = document.getElementsByClassName("plus")[tmp];
    var butM = document.getElementsByClassName("moins")[tmp];
    var max = document.getElementsByClassName("nb_stock")[tmp].textContent;
console.log(max);

    if (cpt < max) {
    document.getElementsByClassName("AffCompteur")[tmp].textContent++;
    }

    if (cpt == max - 1) {
        butP.style.visibility = "hidden";

    } 
    
    if (cpt == 0) {
        butM.style.visibility = "visible";
    }
}

/* Décrémente le compteur */
function suprCpt(tmp) {
    var cpt = document.getElementsByClassName("AffCompteur")[tmp].textContent;
    var butP = document.getElementsByClassName("plus")[tmp];
    var butM = document.getElementsByClassName("moins")[tmp];
    var max = document.getElementsByClassName("nb_stock")[tmp].textContent;

    console.log(max);


    if (cpt > 0) {
        document.getElementsByClassName("AffCompteur")[tmp].textContent--;
    }

    if (cpt == 1) {
        butM.style.visibility = "hidden";

    } 
    
    if (cpt == max) {
        butP.style.visibility = "visible";
    }
}

/* Ajoute un produit au panier */
function ajouter() {

}

/* Affiche ou masque les stocks */
function toggleStock() {

    /* On récupère l'id du bouton */
    let but = document.getElementById("but_stock");

    /* On applique la propriété pour chaque élément de la classe stock */
    for (let elmt of document.querySelectorAll('.stock')) {
        if (getComputedStyle(elmt).display != "none") {
            elmt.style.display = "none";
        } else {
            elmt.style.display = "block";
        }
    }

}

/* Validation des données du form contact */
/* var dateC = document.getElementById("date_contact");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var email = document.getElementById("mail");
var dateN = document.getElementById("date_naissance");
var sujet = document.getElementById("sujet");

dateC.addEventListener("keyup", function (event) {
    if (dateC.validity.typeMismatch) {
        dateC.setCustomValidity("Veuillez entrer une date valide");
    } else {
        dateC.setCustomValidity("");
    }
});

nom.addEventListener("keyup", function (event) {
    if (nom.validity.typeMismatch) {
        nom.setCustomValidity("Veuillez entrer votre nom de famille");
    } else {
        nom.setCustomValidity("");
    }
});

prenom.addEventListener("keyup", function (event) {
    if (prenom.validity.typeMismatch) {
        prenom.setCustomValidity("Veuillez entrer votre prénom");
    } else {
        prenom.setCustomValidity("");
    }
});

email.addEventListener("keyup", function (event) {
    if (email.validity.typeMismatch) {
        email.setCustomValidity("Veuillez rentrer votre email");
    } else {
        email.setCustomValidity("");
    }
});

dateN.addEventListener("keyup", function (event) {
    if (dateN.validity.typeMismatch) {
        dateN.setCustomValidity("Veuillez entrer une date de naissance correcte");
    } else {
        dateN.setCustomValidity("");
    }
});

sujet.addEventListener("keyup", function (event) {
    if (sujet.validity.typeMismatch) {
        sujet.setCustomValidity("Veuillez rentrer ke sujet de votre demande");
    } else {
        sujet.setCustomValidity("");
    }
}); */
