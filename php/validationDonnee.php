<?php

    /* Var témoin pour savoir si les données sont valides ou non */
    $valide = true;

    /* Sécurise la chaine de caractère lue */
    function erase($donnees) {

        /* On supprime les espaces inutiles */
        $donnees = trim($donnees);

        /* On supprime les antislashs */
        $donnees = stripslashes($donnees);

        /* On échappe les caractères spéciaux */
        $donnees = htmlspecialchars($donnees);

        return $donnees;

    }  
    
    /* Définition des variables */
    $date_contact = erase($_POST['date_contact']);
    $nom = erase($_POST['nom']);
    $prenom = erase($_POST['prenom']);
    $mail = erase($_POST['mail']);
    $genre = erase($_POST['genre']);
    $date_naissance = erase($_POST['date_naissance']);
    $fonction = erase($_POST['fonction']);
    $sujet = erase($_POST['sujet']);
    $contenu = erase($_POST['contenu']);

    /* On vérifie que les var ne sont pas vides */
    if (empty($date_contact)
    || empty($nom)
    || empty($prenom)
    || empty($mail)
    || empty($genre)
    || empty($date_naissance)
    || empty($fonction)
    || empty($sujet)
    || empty($contenu)) {

       $valide = false;
    }

    /* Match pattern nom et prenom */
    function patern_nom($data) {
        if (!preg_match("[A-Z][A-Za-z]+", $data)) {
            $valide = false;
        }
    }

    patern_nom($nom);
    patern_nom($prenom);

    /* Match pattern sujet et contenu */
    function patern_content($data) {
        if (!preg_match("[A-Za-z ]+", $data)) {
            $valide = false;
        }
    }

    patern_content($sujet);
    patern_content($contenu);

    /* Si les données ne sont pas valides on renvoit le form avec les erreurs à corriger */
    if ($valide = false) {
        require "'contact.php?date_contact='$date_contact'?nom='$nom'?prenom='$prenom'?mail='$mail'?genre='$genre'?date_naissance='$date_naissance'?fonction='$fonction'?sujet='$sujet'?contenu='$contenu'";
    }

    /* Si elles le sont, on envoie un mail avec un récap */
    if ($valide = true) {
        mail(
            'pradaltito@cy-tech.fr',         /* Destinataire */
            'Résumé de votre demande de contact',       /* Sujet du mail */
            'Date de la demande : ' + $date_contact + '\r\n'
            + 'Nom : ' + $nom + '\r\n'
            + 'Prénom : ' + $prenom + '\r\n'
            + 'Mail : ' + $mail + '\r\n'
            + 'Genre : ' + $genre + '\r\n'
            + 'Date de naissance : ' + $date_naissance + '\r\n'
            + 'Fonction : ' + $fonction + '\r\n'
            + 'Sujet de la demande : ' + $sujet + '\r\n'
            + 'Contenu de la demande : ' + $contenu + '\r\n'
        );
    }

?>
