<?php
session_start();

/* On écrit dans la session les variables rentrées */
$_SESSION['login'] = $_POST['login'];
$_SESSION['mdp'] = $_POST['mdp'];

/* On vérifie qu'un mdp a bien été rentré (évite qu'on dodge la page de connexion) */
if (!isset($_SESSION["login"])){
  header('Location:connexion.php');
  exit();
}

//PARTIE VERIFICATION IDENTITE
$linkFile = "../infos/user.json";
$file = fopen("../infos/user.json", "r");
$verif = false;


if (!filesize($linkFile)) {     /* Si un fichier n'existe pas on renvoit une erreur */
  echo "Le fichier user n'existe pas";
  fclose($file);
}
else {
  /* On vérifie que l'utilisateur existe dans le fichier */
  while ((($data = fgetcsv($file, 1000, ";")) != FALSE) && !$verif) {

    /* On écrit les var dans la session */
    $_SESSION['prenom'] = $data[0];
    $_SESSION['nom'] = $data[1];
    $_SESSION['pp'] = $data[2];
    $_SESSION['date'] = $data[3];
    $_SESSION['adresse'] = $data[4];
    $_SESSION['num'] = $data[5];
    $_SESSION['login1'] = $data[6];
    $_SESSION['mdp1'] = $data[7];

    if ($_SESSION['login'] == $_SESSION['login1'] && $_SESSION['mdp'] == $_SESSION['mdp1']){
      $verif = true;
      header('Location: index.php'); /* Si les infos de connexion correspondent on redirige vers l'accueil */

      exit();
    }
  }
  fclose($file);

  echo "Le login ou le mot de passe est incorrect";   /* On affiche une erreur si les données de connexions ne correspondent pas */
  header('Location: connexion.php');

}

  ?>
