<?php
session_start();

/* On change l'état de la connexion */
$data->user[$_SESSION['i']]->connect = 'false';

/* On update l'état des clients dans la BDD */

/* On efface le panier */
$_SESSION["first_panier"] = false;

session_destroy();
header('Location: connexion.php');
exit();