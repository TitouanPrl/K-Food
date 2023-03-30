<?php
/* A REFAIRE CAR BIG FRAUDE */
    /* Accès à la page plat */
    if ($cat = 'plat') {
        require 'plat.php';
    }

    /* Accès à la page dessert */
    elseif ($cat = 'dessert') {
        require 'dessert.php';
    }

    /* Accès à la page resto */
    elseif ($cat = 'resto') {
        require 'resto.php';
    }
?>