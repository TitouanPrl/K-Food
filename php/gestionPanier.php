<?php session_start();

/* On inclut les fonctions de manipulation de la BDD */
include("../bdd/bdd.php");

Connexion();

/* On met à jour la case correspondante du panier */
updPanier($_POST["nom_produit"], $_POST["quant_produit"]);

/* On rafraichit la page */
header('Location:categories.php?cat=' . $_POST["nom_cat"]);
exit();

?>