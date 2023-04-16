<?php session_start();

/* On met à jour la case correspondante du panier */
$_SESSION["Panier"][$_POST["nom_cat"]][$_POST["nom_produit"]]["stock_panier"] = $_POST["quant_produit"];

echo($_SESSION["Panier"][$_POST["nom_cat"]][$_POST["nom_produit"]]["stock_panier"]);

/* On rafraichit la page */
header('Location:categories.php?cat=' . $_POST["nom_cat"]);
exit();

?>