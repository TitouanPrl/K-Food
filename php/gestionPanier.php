<?php session_start();

/* On inclut les fonctions de manipulation de la BDD */
include("../bdd/bdd.php");

Connexion();

/* On redéfinit $cat au bon format pour l'utiliser dans le tableau de session */
if($_POST["nom_cat"] == 'plat') {
    $_POST["nom_cat"] = 'Plats';
}
else if($_POST["nom_cat"] == 'dessert') {
    $_POST["nom_cat"] = 'Desserts';
}
else if($_POST["nom_cat"] == 'resto') {
    $_POST["nom_cat"] = 'Resto';
}

/* On met à jour la case correspondante du panier */
updPanier($_POST["nom_produit"], $_POST["quant_produit"]);

$new_stock = $_SESSION['data'][$_POST["nom_cat"]][$_POST["nom_produit"]]['stock'] - $_POST["quant_produit"];

updStock($_POST["nom_cat"], $_POST["nom_produit"], $new_stock);

/* On rafraichit la page */
header('Location:categories.php?cat=' . $_POST["nom_cat"]);
exit();

?>