<?php
session_start();

/* On inclut le header */
require 'header.php';

/* On inclut le panier */
//require 'panier.php';

/* On lit la catégorie demandée */
$cat = $_GET['cat'];

/* On ouvre le fichier avec les produits */
$file = "../infos/produits.json";

/* On met le contenu du fichier dans une chaine */
$data = file_get_contents($file);

/* On le décode */
$obj = json_decode($data, true);


/* Si le fichier n'existe pas on renvoit une erreur */
if (!filesize($file)) {
    echo "Le fichier user n'existe pas";
    exit();
}

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
foreach ($obj[$cat] as $current) {
    echo ('<tr>
                    <td><img class="img_produit" src="' . $current['img'] . '" alt="I am an image"></td>
                    <td> ' . $current['nom_et_desc'] . ' </td>
                    <td> ' . $current['prix'] . '
                        <p class ="stock"><i>Stock : <span class="nb_stock">' . $current['stock'] . '</span></i></p>
                    </td>
                    <td>
                        <div class="compteur">
                            <button class="moins" onclick="suprCpt(' . $cpt . ')">-</button>
                            <p class="AffCompteur">0</p>
                            <button class="plus" onclick="addCpt(' . $cpt . ')">+</button>
                        </div>
                        <img class="img_ajout_panier" src="../img/ajouter-au-chariot.png" alt="I am an image">
                    </td>
                </tr>');

    $cpt++;
}

/* Affichage du bouton pour cacher les stocks */
echo ('</tbody>
        </table>

        <button id="but_stock" onclick="toggleStock()">Afficher/Masquer les stocks</button>
        
    </article>
</main>');


echo ('<!-- FOOTER -->');

require 'footer.php';
