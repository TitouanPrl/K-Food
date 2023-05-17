<?php
session_start();

/* On inclut les fonctions de manipulation de la BDD */
include("../bdd/bdd.php");

/* On update l'état des clients dans la BDD */
deconnecter($_SESSION['ID']);

/* On efface le panier */
$_SESSION["first_panier"] = false;

session_destroy();
header('Location: connexion.php');
exit();