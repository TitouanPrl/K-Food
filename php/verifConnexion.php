<?php
session_start();

/* On écrit dans la session les variables rentrées */
$_SESSION['login'] = $_POST['login'];
$_SESSION['mdp'] = $_POST['mdp'];

/* On vérifie qu'un mdp a bien été rentré (évite qu'on dodge la page de connexion) */
if (!isset($_SESSION["login"])){
  header('Location:connexion.php?error=1');
  exit();
}

//PARTIE VERIFICATION IDENTITE
$file = "../infos/user.xml";

/* On met le contenu du fichier dans une chaine */
$data = simplexml_load_file($file);


/* Si le fichier n'existe pas on renvoit une erreur */
if (!filesize($file)) {     
  echo "Le fichier user n'existe pas, l'administrateur a fait un sale boulot, n'hésite pas à le critiquer à pradaltito@cy-tech.fr";
  exit();
}

/* Sinon on vérifie que l'utilisateur existe dans le fichier */
else {

  $_SESSION['i'] = 0;

  foreach($data as $user) {

    /* On écrit les var dans la session */
    $_SESSION['login1'] = (string) $user->userLogin;
    $_SESSION['mdp1'] = (string) $user->userMdp;

    /* Si les infos de connexion correspondent on passe l'état à connecté et on redirige vers l'accueil */
    if ($_SESSION['login'] == $_SESSION['login1'] && $_SESSION['mdp'] == $_SESSION['mdp1']){

      /* On change l'état de la connexion */
      $data->user[$_SESSION['i']]->connect = 'true';

      /* On convertit la chaine en format xml */
      $data_xml = $data->asXML();
      
      /* On ouvre le fichier et on écrit le texte */
      $updFile = fopen("../infos/user.xml", "w+");
      fwrite($updFile, $data_xml);
      fclose($updFile);

      header('Location: accueil.php'); 

      exit();
    }

    $_SESSION['i']++;
  }

  /* Si les données de connexions ne correspondent pas on renvoi vers la connexion */
  session_destroy(); 
  header('Location: connexion.php?error=2');

}

  ?>
