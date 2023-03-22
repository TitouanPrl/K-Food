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
        if (getComputedStyle(elmt).visibility != "hidden") {
            elmt.style.visibility = "hidden";
        } else {
            elmt.style.visibility = "visible";
        }
    }

}

/* Validation des données du form contact */
var dateC = document.getElementById("date_contact");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var email = document.getElementById("mail");
var dateN = document.getElementById("date_naissance");
var sujet = document.getElementById("sujet");

dateC.oninvalid = function (e) {
    if (!e.target.validity.valid) {
        e.target.setCustomValidity("Veuillez entrer une date valide");
    } else {
        e.target.setCustomValidity("");
    }
};

nom.oninvalid = function (e) {
    if (!e.validity.valid) {
        e.target.setCustomValidity("Veuillez entrer votre nom de famille");
    } else {
        e.target.setCustomValidity("");
    }
};

prenom.oninvalid = function (e) {
    if (!e.target.validity.valid) {
        e.target.setCustomValidity("Veuillez entrer votre prénom");
    } else {
        e.target.setCustomValidity("");
    }
};

email.oninvalid = function (e) {
    if (!e.target.validity.valid) {
        e.target.setCustomValidity("Veuillez rentrer votre email");
    } else {
        e.target.setCustomValidity("");
    }
};

dateN.oninvalid = function (e) {
    if ((!e.target.validity.valid) {
        e.target.setCustomValidity("Veuillez entrer une date de naissance correcte");
    } else {
        e.target.setCustomValidity("");
    }
};

sujet.oninvalid = function (e) {
    if (!e.target.validity.valid) {
        e.target.setCustomValidity("Veuillez rentrer le sujet de votre demande");
    } else {
        e.target.setCustomValidity("");
    }
};
