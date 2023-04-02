<?php
session_start();

/* On vérifie qu'un mdp a bien été rentré (évite qu'on dodge la page de connexion) */
if (!isset($_SESSION["login"])){
    header('Location:connexion.php');
    exit();
}

$cat = $_GET['cat'];

/* A REFAIRE CAR BIG FRAUDE */
    /* Accès à la page plat */
    if ($cat == 'plat') {
        header("Location:plat.php");
    }

    /* Accès à la page dessert */
    elseif ($cat == 'dessert') {
        header("Location:dessert.php");
    }

    /* Accès à la page resto */
    elseif ($cat == 'resto') {
        header("Location:resto.php");
    }
?>