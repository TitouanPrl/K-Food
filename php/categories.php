<?php

/* On inclut le header */
require 'header.php';

/* On inclut le panier */
require 'panier.php';

/* On inclut les fonctions de manipulation de la BDD */
include("../bdd/bdd.php");

/* On injecte les champs de la BDD en session */
Connexion();
recupAll();

/* On lit la catégorie demandée */
$cat = $_GET['cat'];


/* Affichage de l'en-tête*/
switch ($cat) {
    case 'plat':
        echo ('<!-- MAIN CONTENT -->

<main>
    <article>
        <h2>Un régime délicieux</h2>

        <table class="cat_tab">
            <thead>
                <tr>
                    <th colspan="4">5 plats typiques</th>
                </tr>
            </thead>
            <tbody>');
            
        break;

    case 'dessert':
        echo ('<!-- MAIN CONTENT -->

<main>
    <article>
        <h2>De quoi ravir son palais et son diabète</h2>

        <table class="cat_tab">
            <thead>
                <tr>
                    <th colspan="4">5 desserts typiques</th>
                </tr>
            </thead>
            <tbody>');

        break;

    case 'resto':
        echo ('<!-- MAIN CONTENT -->

<main>
    <article>
        <h2>Découvrez où vous remplir la panse</h2>

        <table class="cat_tab">
            <thead>
                <tr>
                    <th colspan="4">5 restaurants à Séoul</th>
                </tr>
            </thead>
            <tbody>');

        break;
        
    default:
       exit();
}


/* On définit le compteur */
$cpt = 0;

/* Affichage du corps de la page en fonction de la catégorie choisie */
foreach ($_SESSION["data"][$cat] as $current) {

    $affCompteur = "<p class='AffCompteur'>0</p>";

    echo ('<tr> 
                    <td><img class="img_produit" src="' . $current['img'] . '" alt="I am an image"></td>
                    <td> <b>' . $current['nom'] . '</b>' . 
                    $current['descProd'] . ' </td>
                    <td> ' . $current['prix'] . '
                        <p class ="stock"><i>Stock : <span class="nb_stock">' . $current['stock'] . '</span></i></p>
                    </td>
                    <td>
                        <div class="compteur">
                            <button class="moins" onclick="suprCpt(' . $cpt . ')">-</button>
                            ' . $affCompteur . '
                            <button class="plus" onclick="addCpt(' . $cpt . ')">+</button>
                        </div>');

                        /* On récupère le nom du produit dans une input */
                        echo('<form action="gestionPanier.php" method="POST">
                        <input name="nom_produit" type="hidden" value="' . $current["nom"] . '">
                        <input name="nom_cat" type="hidden" value="' . $cat . '">
                        <input class="quant_produit" name="quant_produit" type="hidden" value="0"> ');

                        echo('<input type="image" class="img_ajout_panier" src="../img/ajouter-au-chariot.png" alt="I am an image" Value ="submit">
                        </td>
                </form>
            </tr>');

    $cpt++;
}

echo ('</tbody>
        </table>');

/* Affichage du bouton pour cacher les stocks si l'utilisateur est un admin */
if($_SESSION['admin'] == true) {
    echo('<button id="but_stock" onclick="toggleStock()">Afficher/Masquer les stocks</button>');
}     
        
echo('</article>
</main>');


echo ('<!-- FOOTER -->');

require 'footer.php';
