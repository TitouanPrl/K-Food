<?php
session_start();

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