<?php
$_SESSION["bdd"] = mysqli_connect("localhost", "devWeb", "devWeb31$", "Kfood");

/* Gestion des cas d'erreur */
if (mysqli_connect_errno($_SESSION["bdd"])) {
    echo mysqli_connect_error();
};

$data = mysqli_fetch_array($result);
mysqli_free_result($data);

echo($bdd);
?>