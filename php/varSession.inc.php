<? session_start();

    /* On crée le tableau des catégories */
    include("bdd.php");

    Connexion();
    recupAll();

    /* On le passe en variable de session */
    $_SESSION["Categories"] = $_SESSION["data"];


?>