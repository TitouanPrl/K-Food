<?php session_start();

/* On crée le tableau représentant le panier */
$panier = array(
    "plat" => array(
        "Bibimbap" => array(
            "nom" => "Bibimbap",
            "prix" => "10€",
            "stock" => "0",
        ),

        "Naengmyeon" => array(
            "nom" => "Naengmyeon",
            "prix" => "5€",
            "stock" => "0",
        ),

        "Kimchi Jjigae" => array(
            "nom" => "Kimchi Jjigae",
            "prix" => "8€",
            "stock" => "0",
        ),

        "Kimbap" => array(
            "nom" => "Kimbap",
            "prix" => "15€",
            "stock" => "0",
        ),

        "Mandu" => array(
            "nom" => "Mandu",
            "prix" => "7€",
            "stock" => "0",
        ),
    ),

    "dessert" => array(
        "Gyeongdan" => array(
            "nom" => "Gyeongdan",
            "prix" => "15€",
            "stock" => "0",
        ),

        "Hotteok" => array(
            "nom" => "Hotteok",
            "prix" => "10€",
            "stock" => "0",
        ),

        "hodu-gwaja" => array(
            "nom" => "Hodu-gwaja",
            "prix" => "7€",
            "stock" => "0",
        ),

        "Gogumattang" => array(
            "nom" => "Gogumattang",
            "prix" => "10€",
            "stock" => "0",
        ),

        "Hwajeon" => array(
            "nom" => "Hwajeon",
            "prix" => "7€",
            "stock" => "0",
        ),
    ),

    "resto" => array(
        "Flavors" => array(
            "nom" => "Flavors",
            "prix" => "47€",
            "stock" => "0",
        ),

        "Jangseng Geongangwon" => array(
            "nom" => "Jangseng Geongangwon",
            "prix" => "11€",
            "stock" => "0",
        ),

        "853" => array(
            "nom" => "853",
            "prix" => "11€",
            "stock" => "0",
        ),

        "Jihwaja" => array(
            "nom" => "Jihwaja",
            "prix" => "69€",
            "stock" => "0",
        ),

        "Jungsik" => array(
            "nom" => "Jungsik",
            "prix" => "47€",
            "stock" => "0",
        ),
    ),

);

/* On le passe en variable de session */
$_SESSION["Panier"] = $panier;

/* Affichage du panier */
echo ('<div id="panier">
<img id="icon_panier" src="../img/panier.png" alt="I am an image">
');

/* On affiche chaque élément non nul du panier */
foreach ($_SESSION["Panier"] as $cat) {

    foreach ($cat as $current) {

        /* Si la quantité commandée d'un objet n'est pas nulle, on l'affiche */
        if ($current["stock"] != 0) {
            echo (' <div class="prod_panier">
                   <p class="nom_prod_panier">' . $current["nom"] . '</p>
                   <p class="quant_prod_panier">' . $current["stock"] . '</p>
                   <p class="prix_prod_panier">' . $current["stock"] * $current["prix"] . '</p>
                </div>
                   ');
        }
    }
}

echo ('</div>');
