<?php session_start();

/* On initialise le panier à 0 lors du premier appel */
if ($_SESSION["first_panier"] == false) {

    $_SESSION["first_panier"] = true;

    $panier = array(
        "plat" => array(
            "Bibimbap" => array(
                "nom" => "Bibimbap",
                "prix" => "10€",
                "stock_panier" => "0",
            ),

            "Naengmyeon" => array(
                "nom" => "Naengmyeon",
                "prix" => "5€",
                "stock_panier" => "0",
            ),

            "Kimchi Jjigae" => array(
                "nom" => "Kimchi Jjigae",
                "prix" => "8€",
                "stock_panier" => "0",
            ),

            "Kimbap" => array(
                "nom" => "Kimbap",
                "prix" => "15€",
                "stock_panier" => "0",
            ),

            "Mandu" => array(
                "nom" => "Mandu",
                "prix" => "7€",
                "stock_panier" => "0",
            ),
        ),

        "dessert" => array(
            "Gyeongdan" => array(
                "nom" => "Gyeongdan",
                "prix" => "15€",
                "stock_panier" => "0",
            ),

            "Hotteok" => array(
                "nom" => "Hotteok",
                "prix" => "10€",
                "stock_panier" => "0",
            ),

            "hodu-gwaja" => array(
                "nom" => "Hodu-gwaja",
                "prix" => "7€",
                "stock_panier" => "0",
            ),

            "Gogumattang" => array(
                "nom" => "Gogumattang",
                "prix" => "10€",
                "stock_panier" => "0",
            ),

            "Hwajeon" => array(
                "nom" => "Hwajeon",
                "prix" => "7€",
                "stock_panier" => "0",
            ),
        ),

        "resto" => array(
            "Flavors" => array(
                "nom" => "Flavors",
                "prix" => "47€",
                "stock_panier" => "0",
            ),

            "Jangseng Geongangwon" => array(
                "nom" => "Jangseng Geongangwon",
                "prix" => "11€",
                "stock_panier" => "0",
            ),

            "853" => array(
                "nom" => "853",
                "prix" => "11€",
                "stock_panier" => "0",
            ),

            "Jihwaja" => array(
                "nom" => "Jihwaja",
                "prix" => "69€",
                "stock_panier" => "0",
            ),

            "Jungsik" => array(
                "nom" => "Jungsik",
                "prix" => "47€",
                "stock_panier" => "0",
            ),
        ),

    );

    /* On le passe en variable de session */
    $_SESSION["Panier"] = $panier;
}

/* Affichage du panier */
echo ('<div id="panier">
<img id="icon_panier" src="../img/panier.png" alt="I am an image">
');

/* On initialise la variable du prix total */
$prix_tot = 0;


/* On parcourt le panier */
foreach ($_SESSION["Panier"] as $cat) {

    foreach ($cat as $current) {

        /* Si la quantité commandée d'un objet n'est pas nulle, on l'affiche */
        if ($current["stock_panier"] != 0) {
            echo (' <div class="prod_panier">
                   <p class="nom_prod_panier"><b>' . $current["nom"] . '</b></p>
                   <p class="quant_prod_panier"> Quantité : ' . $current["stock_panier"] . '</p>
                   <p class="prix_prod_panier">Prix : ' . $current["stock_panier"] * $current["prix"] . '€</p>
                </div>
            ');

            $prix_tot += $current["stock_panier"] * $current["prix"];
        }
    }
}

echo ('<p id="prix_tot_prod_panier">Prix total : ' . $prix_tot . '€</p>
</div>');
