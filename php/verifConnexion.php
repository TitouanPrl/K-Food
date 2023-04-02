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
$file = "../infos/user.json";

/* On met le contenu du fichier dans une chaine */
$data = file_get_contents($file);

/* On le décode */
$obj = json_decode($data,true);


/* Si un fichier n'existe pas on renvoit une erreur */
if (!filesize($file)) {     
  echo "Le fichier user n'existe pas";
}

/* Sinon on vérifie que l'utilisateur existe dans le fichier */
else {
  foreach($obj['userList'] as $current) {

    /* On écrit les var dans la session */
    $_SESSION['login1'] = $current['userLogin'];
    $_SESSION['mdp1'] = $current['userMdp'];

    /* Si les infos de connexion correspondent on passe l'état à connecté et on redirige vers l'accueil */
    if ($_SESSION['login'] == $_SESSION['login1'] && $_SESSION['mdp'] == $_SESSION['mdp1']){

      //$current['connect'] = 'true'; A REFAIRE

      //$updFile = fopen("../infos/user.json", "r+");
      //fwrite($updFile, json_encode($obj));
      //fclose($file);

      header('Location: accueil.php'); 

      exit();
    }
  }

  /* Si les données de connexions ne correspondent pas on renvoi vers la connexion */
  session_destroy(); 
  header('Location: connexion.php');

}

/*
// chemin d'accès à votre fichier JSON
$file = 'file.json'; 
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
// décoder le flux JSON
$obj = json_decode($data); 
// accéder à l'élément approprié
echo $obj[0]->name;*/

  ?>
