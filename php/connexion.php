<?php
session_start();
?>

<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />

  <title>K-Food</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="shortcut icon" type="image/png" href="../img/korean_food.png">
  <script src="../js/script.js"></script>


</head>

<body>
  <!-- HEADER -->

  <header>
    <h1>WELCOME TO K-FOOD</h1>

    <img id="logo" src="../img/korean_food.png" alt="logo">

  </header>

  <!-- MAIN CONTENT -->

  <main>
    <article>

      <?php
      /* Envoie un message correspondant à l'erreur de manipulation */
      switch ($_GET['error']) {
        case '1':
          echo "<p id='notif'>Il semblerait que vous n'ayez pas rentré vos identifiants</p>";
          break;
          
        case '2':
          echo "<p id='notif'>Il semblerait qu'il y ait une erreur dans vos identifiants</ps>";
          break;

        default:
          break;
      }

      ?>

      <h2>Connexion</h2>

      <form action="verifConnexion.php" method="POST">

        <div id="form">

          <div id="formG">
            <fieldset>
              <legend>Login</legend>
              <input type="text" id="login" name="login" required> <br>
            </fieldset>

          </div>

          <div id="formD">

            <fieldset>
              <legend>Mot de passe</legend>
              <input type="password" id="mdp" name="mdp" required> <br>
            </fieldset>

          </div>
        </div>

        <input type="submit" id="submit" value="Valider">

      </form>
    </article>
  </main>

  <?php require 'footer.php'; ?>