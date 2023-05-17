<?php

require_once("bddData.php");

/* Connexion à la BDD */
function Connexion() {
    $_SESSION["bdd"] = mysqli_connect(SERV, LOGIN, MDP, BDD);

    /* Erreur si la BDD n'existe pas */
    $boolRes = mysqli_select_db($_SESSION["bdd"], BDD);
    if (!$boolRes) {
        throw new Exception(BDD.' introuvable');
    }

    /* Erreur si la requête ne s'éxécute pas bien */
    if (!$_SESSION["bdd"]) {
       die("Connection failed: " . mysqli_connect_error());
    }

    $_SESSION["data"] = array(array());

    return true;
}

/* Déconnexion de la BDD */
function Deconnexion() {
    mysqli_close($_SESSION["bdd"]);

    return (true);
}

/* Récupère les différents user */
function recupClient() {
    /* On vérifie que la BDD existe bien */
    if ($_SESSION["bdd"] == NULL) {
        throw new Exception("La BDD n'existe pas");
    }

    $reqClient = 'SELECT * FROM  Client';
    $resClient = mysqli_query($_SESSION["bdd"],$reqClient) or die('Pb req : '.$reqClient);

    /* Si la requête a échoué on le signale */
    if ($resClient == false) {
        throw new Exception("Erreur dans la requête");
    }

    while ($act = mysqli_fetch_assoc($resClient)) {
        $_SESSION["data"]["Clients"][] = $act;
    }
}

/* Récupère les différents plats */
function recupPlats() {
    /* On vérifie que la BDD existe bien */
    if ($_SESSION["bdd"] == NULL) {
        throw new Exception("La BDD n'existe pas");
    }

    $reqPlats = 'SELECT * FROM  Plats';
    $resPlats = mysqli_query($_SESSION["bdd"],$reqPlats) or die('Pb req : '.$reqPlats);

    /* Si la requête a échoué on le signale */
    if ($resPlats == false) {
        throw new Exception("Erreur dans la requête");
    }

    while ($act = mysqli_fetch_assoc($resPlats)) {
        $_SESSION["data"]["plat"][] = $act;
    }
}

/* Récupère les différents desserts */
function recupDesserts() {
    /* On vérifie que la BDD existe bien */
    if ($_SESSION["bdd"] == NULL) {
        throw new Exception("La BDD n'existe pas");
    }

    $reqDesserts = 'SELECT * FROM  Desserts';
    $resDesserts = mysqli_query($_SESSION["bdd"],$reqDesserts) or die('Pb req : '.$reqDesserts);

    /* Si la requête a échoué on le signale */
    if ($resDesserts == false) {
        throw new Exception("Erreur dans la requête");
    }

    while ($act = mysqli_fetch_assoc($resDesserts)) {
        $_SESSION["data"]["dessert"][] = $act;
    }
}

/* Récupère les différents resto */
function recupResto() {
    /* On vérifie que la BDD existe bien */
    if ($_SESSION["bdd"] == NULL) {
        throw new Exception("La BDD n'existe pas");
    }

    $reqResto = 'SELECT * FROM  Resto';
    $resResto = mysqli_query($_SESSION["bdd"],$reqResto) or die('Pb req : '.$reqResto);

    /* Si la requête a échoué on le signale */
    if ($resResto == false) {
        throw new Exception("Erreur dans la requête");
    }

    while ($act = mysqli_fetch_assoc($resResto)) {
        $_SESSION["data"]["resto"][] = $act;
    }
}

/* Récupère le contenu du panier */
function recupPanier() {
    /* On vérifie que la BDD existe bien */
    if ($_SESSION["bdd"] == NULL) {
        throw new Exception("La BDD n'existe pas");
    }

    $reqPanier = 'SELECT * FROM  Panier';
    $resPanier = mysqli_query($_SESSION["bdd"],$reqPanier) or die('Pb req : '.$reqPanier);

    /* Si la requête a échoué on le signale */
    if ($resPanier == false) {
        throw new Exception("Erreur dans la requête");
    }

    while ($act = mysqli_fetch_assoc($resPanier)) {
        $_SESSION["data"]["Panier"][] = $act;
    }
}

/* Récupère tout le contenu de la BDD */
function recupAll() {

    recupClient();
    recupPlats();
    recupDesserts();
    recupResto();
    recupPanier();

}

/* Passer l'état d'un client à connecté */
function connecter($id) {

    if( $_SESSION["bdd"] == NULL)
        throw new Exception("La BDD n'existe pas");

    $req = "UPDATE Client SET connectID = true WHERE idClient = '$id'";
    $res = mysqli_query($_SESSION["bdd"], $req);

    if ($res == false)
        throw new Exception("Erreur dans la requête");

    return (true);
}

/* Passer l'état d'un client à déconnecté */
function deconnecter($id) {

    if( $_SESSION["bdd"] == NULL)
        throw new Exception("La BDD n'existe pas");

    $req = "UPDATE Client SET connectID = false WHERE idClient = '$id'";
    $res = mysqli_query($_SESSION["bdd"], $req);

    if ($res == false)
        throw new Exception("Erreur dans la requête");

    return (true);
}

?>