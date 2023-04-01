<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>
    <body>
      <form id="monForm" name="monForm" action="verifConnexion.php" method="POST">
        <fieldset>
          <legend>Connexion</legend>
          <label>Login</label> <input type="text" id="nom" name="login" required="required"> <br>
          <label>Mot de passe</label> <input type="password" id="mdp" name="mdp" required="required"> <br>
        </fieldset>
        <input type="submit" id="submit" name="submit" value="Valider">
       </form>
    </body>
</html>
