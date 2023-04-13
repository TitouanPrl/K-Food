<?php session_start();

/* On crée le tableau représentant le panier */
$panier = array(
    "plat" => array(
        "Bibimbap" => array(
            "prix" => "10€",
            "stock" => "0",
        ),

        "Naengmyeon" => array(
            "prix" => "5€",
            "stock" => "0",
        ),

        "Kimchi Jjigae" => array(
            "prix" => "8€",
            "stock" => "0",
        ),

        "Kimbap" => array(
            "prix" => "15€",
            "stock" => "0",
        ),

        "Mandu" => array(
            "prix" => "7€",
            "stock" => "0",
        ),
    ),

    "dessert" => array(
        "Gyeongdan" => array(
            "prix" => "15€",
            "stock" => "0",
        ),

        "Hotteok" => array(
            "prix" => "10€",
            "stock" => "0",
        ),

        "hodu-gwaja" => array(
            "prix" => "7€",
            "stock" => "0",
        ),

        "Gogumattang" => array(
            "prix" => "10€",
            "stock" => "0",
        ),

        "Hwajeon" => array(
            "prix" => "7€",
            "stock" => "0",
        ),
    ),

    "resto" => array(
        "Flavors" => array(
            "prix" => "47€",
            "stock" => "0",
        ),

        "Jangseng Geongangwon" => array(
            "prix" => "11€",
            "stock" => "0",
        ),

        "853" => array(
            "prix" => "11€",
            "stock" => "0",
        ),

        "Jihwaja" => array(
            "prix" => "69€",
            "stock" => "0",
        ),

        "Jungsik" => array(
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
foreach ($_SESSION["Panier"] as $current) {
    echo ('
    ');
}

echo ('</div>');

?>
