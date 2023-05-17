<?php

/* On inclut les fonctions de manipulation de la BDD */
include("../bdd/bdd.php");

/* On remplit le panier avec les données de la BDD */
Connexion();
recupPanier();


/* Affichage du panier */
echo ('<div id="panier">
<img id="icon_panier" src="../img/panier.png" alt="I am an image">
');

/* On initialise la variable du prix total */
$prix_tot = 0;


/* On parcourt le panier */
foreach ($_SESSION["data"]['Panier'] as $current) {

    /* Si la quantité commandée d'un objet n'est pas nulle, on l'affiche */
    if ($current["quantite"] != 0) {
        echo (' <div class="prod_panier">
                   <p class="nom_prod_panier"><b>' . $current["nom"] . '</b></p>
                   <p class="quant_prod_panier"> Quantité : ' . (int) $current["quantite"] . '</p>
                   <p class="prix_prod_panier">Prix : ' . (int) $current["quantite"] * (int) $current["prix"] . '€</p>
                </div>
            ');

        $prix_tot += (int) $current["quantite"] * (int) $current["prix"];
    }
}

echo ('<p id="prix_tot_prod_panier">Prix total : ' . $prix_tot . '€</p>
<button id="but_paiement">Payer</button>
</div>');
