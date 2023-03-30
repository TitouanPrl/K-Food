<?php require 'header.php'; ?>

    <!-- MAIN CONTENT -->

    <main>
        <article>
            <h2>De quoi ravir son palais et son diabète</h2>

            <table>
                <thead>
                    <tr>
                        <th colspan="4">5 desserts typiques</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="img_produit" src="../img/Gyeongdan.jpg" alt="Gyeongdan"></td>
                        <td>Gyeongdan</td>
                        <td>15€
                            <p class ="stock"><i>Stock : <span class="nb_stock">6</span></i></p>
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
                        <td><img class="img_produit" src="../img/Hotteok.jpeg" alt="Gyeongdan"></td>
                        <td>Hotteok</td>
                        <td>10€
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
                        <td><img class="img_produit" src="../img/hodu-gwaja.jpg" alt="Gyeongdan"></td>
                        <td>Hodou gwaja</td>
                        <td>7€
                            <p class ="stock"><i>Stock : <span class="nb_stock">63</span></i></p>
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
                        <td><img class="img_produit" src="../img/Gogumattang.jpg" alt="Gyeongdan"></td>
                        <td>Gogumattang</td>
                        <td>10€
                            <p class ="stock"><i>Stock : <span class="nb_stock">52</span></i></p>
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
                        <td><img class="img_produit" src="../img/Hwajeon.jpg" alt="Gyeongdan"></td>
                        <td>Hwajeon</td>
                        <td>7€
                            <p class ="stock"><i>Stock : <span class="nb_stock">43</span></i></p>
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