/* Incrémente le compteur */
function addCpt(tmp) {
    var cpt = parseInt(document.getElementsByClassName("AffCompteur")[tmp].textContent);
    var butP = document.getElementsByClassName("plus")[tmp];
    var butM = document.getElementsByClassName("moins")[tmp];
    var max = parseInt(document.getElementsByClassName("nb_stock")[tmp].textContent);

    if (cpt < max) {
    document.getElementsByClassName("AffCompteur")[tmp].textContent++;
    document.getElementsByClassName("quant_produit")[tmp].value++;
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
    var cpt = parseInt(document.getElementsByClassName("AffCompteur")[tmp].textContent);
    var butP = document.getElementsByClassName("plus")[tmp];
    var butM = document.getElementsByClassName("moins")[tmp];
    var max = parseInt(document.getElementsByClassName("nb_stock")[tmp].textContent);


    if (cpt > 0) {
        document.getElementsByClassName("AffCompteur")[tmp].textContent--;
        document.getElementsByClassName("quant_produit")[tmp].value--;
    }

    if (cpt == 1) {
        butM.style.visibility = "hidden";

    } 
    
    if (cpt == max) {
        butP.style.visibility = "visible";
    }
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
function valider() {
    
var dateC = document.getElementById("date_contact");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var email = document.getElementById("mail");
var dateN = document.getElementById("date_naissance");
var sujet = document.getElementById("sujet");

    dateC.setCustomValidity("");
    if (!dateC.validity.valid) {
        dateC.setCustomValidity("Veuillez entrer une date valide. Ex : 03/22/2023");
    } else {
        dateC.setCustomValidity("");
    }

    nom.setCustomValidity("");
    if (!nom.validity.valid) {
        nom.setCustomValidity("Veuillez entrer votre nom de famille. Ex : Pradal");
    } else {
        nom.setCustomValidity("");
    }

    prenom.setCustomValidity("");
    if (!prenom.validity.valid) {
        prenom.setCustomValidity("Veuillez entrer votre prénom. Ex : Titouan");
    } else {
        prenom.setCustomValidity("");
    }

    email.setCustomValidity("");
    if (!email.validity.valid) {
        email.setCustomValidity("Veuillez rentrer votre email. Ex : pradaltito@cy-tech.fr");
    } else {
        email.setCustomValidity("");
    }

    dateN.setCustomValidity("");
    if (!dateN.validity.valid) {
        dateN.setCustomValidity("Veuillez entrer une date de naissance correcte. Ex : 08/07/2002");
    } else {
        dateN.setCustomValidity("");
    }

    sujet.setCustomValidity("");
    if (!sujet.validity.valid) {
        sujet.setCustomValidity("Veuillez rentrer le sujet de votre demande");
    } else {
        sujet.setCustomValidity("");
    }

}