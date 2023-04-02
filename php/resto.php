<?php require 'header.php'; ?>

    <!-- MAIN CONTENT -->

    <main>
        <article>
            <h2>Découvrez où vous remplir la panse</h2>

            <table class="cat_tab">
                <thead>
                    <tr>
                        <th colspan="4">5 restaurants à Séoul</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="img_produit" src="../img/Flavors.jpg" alt="Gyeongdan"></td>
                        <td><strong>Flavors</strong>
                            <br> Fruits de mer & Poisson / Asiatique / Coréenne
                        </td>
                        <td>47€ à 112€
                            <p class ="stock"><i>Stock : <span class="nb_stock">142</span></i></p>
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
                        <td><img class="img_produit" src="../img/Jangseng Geongangwon.jpg" alt="Jangseng Geongangwon
                            "></td>
                        <td><strong>Jangseng Geongangwon
                        </strong>
                            <br> Coréenne
                        </td>
                        <td>11€ à 728€
                            <p class ="stock"><i>Stock : <span class="nb_stock">14</span></i></p>
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
                        <td><img class="img_produit" src="../img/853.jpg" alt="853"></td>
                        <td><strong>853</strong>
                            <br> Barbecue / Grillades / Asiatique / Coréenne
                        </td>
                        <td>11€ à 22€
                            <p class ="stock"><i>Stock : <span class="nb_stock">68</span></i></p>
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
                        <td><img class="img_produit" src="../img/Jihwaja.jpg" alt="Jihwaja"></td>
                        <td><strong>Jihwaja</strong>
                            <br> Coréenne / Végétariens bienvenus /Choix végétaliens
                        <td>69€ à 142€
                            <p class ="stock"><i>Stock : <span class="nb_stock">6</span></i></p>
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
                        <td><img class="img_produit" src="../img/Jungsik.jpg" alt="Jungsik"></td>
                        <td><strong>Jungsik</strong>
                            <br> Asiatique / Coréenne / Végétariens bienvenus
                        </td>
                        <td>47€ à 140€
                            <p class ="stock"><i>Stock : <span class="nb_stock">57</span></i></p>
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