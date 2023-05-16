<?php
session_start();

$file = "../infos/user.xml";

/* On met le contenu du fichier dans une chaine */
$data = simplexml_load_file($file);

/* On change l'état de la connexion */
$data->user[$_SESSION['i']]->connect = 'false';

/* On convertit la chaine en format xml */
$data_xml = $data->asXML();

/* On ouvre le fichier et on écrit le texte */
$updFile = fopen("../infos/user.xml", "w+");
fwrite($updFile, $data_xml);
fclose($updFile);

/* On efface le panier */
$_SESSION["first_panier"] = false;

session_destroy();
mysqli_close($_SESSION["bdd"]);
header('Location: connexion.php');
exit();