<?php session_start();

/* On inclut les fonctions de manipulation de la BDD */
include("../bdd/bdd.php");

Connexion();

/* On redéfinit $cat au bon format pour l'utiliser dans le tableau de session */
if($_POST["nom_cat"] == 'plat') {
    $cat_format = 'Plats';
}
else if($_POST["nom_cat"] == 'dessert') {
    $cat_format = 'Desserts';
}
else if($_POST["nom_cat"] == 'resto') {
    $cat_format = 'Resto';
}

/* On met à jour la case correspondante du panier */
updPanier($_POST["nom_produit"], $_POST["quant_produit"]);

$stock_act = getQuantite($cat_format, $_POST["nom_produit"]);

$new_stock = $stock_act - $_POST["quant_produit"];

updStock($cat_format, $_POST["nom_produit"], $new_stock);

/* On rafraichit la page */
header('Location:categories.php?cat=' . $_POST["nom_cat"]);
exit();

?>