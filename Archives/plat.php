<?php require 'header.php'; ?>

    <!-- MAIN CONTENT -->

    <main>
        <article>
            <h2>Un régime délicieux</h2>

            <table class="cat_tab">
                <thead>
                    <tr>
                        <th colspan="4">5 plats typiques</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="img_produit" src="../img/Bibimbap.jpg" alt="Gyeongdan"></td>
                        <td><b>Bibimbap</b>
                            <br> Tout simplement du riz, qui est mélangé la plupart du temps avec des légumes et de la viande
                        </td>
                        <td>10€
                            <p class ="stock"><i>Stock : <span class="nb_stock">669</span></i></p>
                        </td>
                        <td>
                            <div class="compteur">
                                <button class="moins" onclick="suprCpt(0)">-</button>
                                <p class="AffCompteur">0</p>
                                <button class="plus" onclick="addCpt(0)">+</button>
                            </div>
                            <button onclick="ajouter()">Reserver</button>
                        </td>
                    </tr>

                    <tr>
                        <td><img class="img_produit" src="../img/Naengmyeon.png" alt="Naengmyeon"></td>
                        <td><b>Naengmyeon</b>
                            <br> Le naengmyeon est cuisiné à base de nouilles servies froides !
                        </td>
                        <td>5€
                            <p class ="stock"><i>Stock : <span class="nb_stock">63</span></i></p>
                        </td>
                        <td>
                            <div class="compteur">
                                <button class="moins" onclick="suprCpt(1)">-</button>
                                <p class="AffCompteur">0</p>
                                <button class="plus" onclick="addCpt(1)">+</button>
                            </div>
                            <button onclick="ajouter()">Reserver</button>
                        </td>
                    </tr>

                    <tr>
                        <td><img class="img_produit" src="../img/Kimchi Jjigae.jpg" alt="Kimchi Jjigae"></td>
                        <td><b>Kimchi Jjigae</b>
                            <br> Vous pouvez trouver à l’intérieur de ce plat de la viande, des fruits de mer, du tofu, des oignons ou encore de la pâte de haricots fermentés
                        </td>
                        <td>8€
                            <p class ="stock"><i>Stock : <span class="nb_stock">69</span></i></p>
                        </td>
                        <td>
                            <div class="compteur">
                                <button class="moins" onclick="suprCpt(2)">-</button>
                                <p class="AffCompteur">0</p>
                                <button class="plus" onclick="addCpt(2)">+</button>
                            </div>
                            <button onclick="ajouter()">Reserver</button>
                        </td>
                    </tr>

                    <tr>
                        <td><img class="img_produit" src="../img/Kimbap.jpg" alt="Kimbap"></td>
                        <td><b>Kimbap</b>
                            <br> On retrouve du riz roulé dans une feuille d'algue séchée, avec en son centre de la garniture (produits cuits/légumes)
                        </td>
                        <td>15€
                            <p class ="stock"><i>Stock : <span class="nb_stock">78</span></i></p>
                        </td>
                        <td>
                            <div class="compteur">
                                <button class="moins" onclick="suprCpt(3)">-</button>
                                <p class="AffCompteur">0</p>
                                <button class="plus" onclick="addCpt(3)">+</button>
                            </div>
                            <button onclick="ajouter()">Reserver</button>
                        </td>
                    </tr>

                    <tr>
                        <td><img class="img_produit" src="../img/Mandu.jpg" alt="Mandu"></td>
                        <td><b>Mandu</b>
                            <br> Les mandu sont en fait des ravioles coréennes
                        </td>
                        <td>7€
                            <p class ="stock"><i>Stock : <span class="nb_stock">89</span></i></p>
                        </td>
                        <td>
                            <div class="compteur">
                                <button class="moins" onclick="suprCpt(4)">-</button>
                                <p class="AffCompteur">0</p>
                                <button class="plus" onclick="addCpt(4)">+</button>
                            </div>
                            <button onclick="ajouter()">Reserver</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button id="but_stock" onclick="toggleStock()">Afficher/Masquer les stocks</button>
            
        </article>
    </main>

    <!-- FOOTER -->

<?php require 'footer.php'; ?>