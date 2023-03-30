<?php require 'header.php'; ?>

    <!-- MAIN CONTENT -->

    <main>
        <article>
            <h2>Demande de contact</h2>
            <form method="POST">

                <div id="form">
                    <div id="formG">
                        <fieldset>
                            <legend>Date du contact</legend>
                            <input type="date" id="date_contact" name="date_contact" required> <br>
                        </fieldset>

                        <fieldset>
                            <legend>Nom</legend>
                            <input type="text" id="nom" name="nom" required pattern="[A-Z][A-Za-z]+"> <br>
                        </fieldset>

                        <fieldset>
                            <legend>Prénom</legend>
                            <input type="text" id="prenom" name="prenom" required pattern="[A-Z][A-Za-z]+"> <br>
                        </fieldset>

                        <fieldset>
                            <legend>Mail</legend>
                            <input type="email" id="mail" name="mail" required> <br>
                        </fieldset>

                        <fieldset>
                            <legend>Choisissez votre genre</legend>
                            <div id="choix_genre">
                                <input type="radio" class="genre" name="genre" value="Homme">
                                <label class="genre" for="homme">Homme</label><br>
                                <input type="radio" class="genre" name="genre" value="Femme">
                                <label class="genre" for="femme">Femme</label><br>
                                <input type="radio" class="genre" name="genre" value="Autre">
                                <label class="genre" for="autre">Autre</label> <br>
                            </div>
                        </fieldset>
                    </div>

                    <div id="formD">

                        <fieldset>
                            <legend>Date de naissance</legend>
                            <input type="date" id="date_naissance" name="date_naissance" required> <br>
                        </fieldset>

                        <fieldset>
                            <legend>Qui êtes vous ?</legend>
                            <select name="fonction" id="fonction" required>
                                <option value="">--Choisissez votre état--</option>
                                <option value="touriste">Touriste</option>
                                <option value="local">Local</option>
                            </select>
                            <br>
                        </fieldset>

                        <fieldset>
                            <legend>Sujet de la demande</legend>
                            <input type="text" id="sujet" name="sujet" required pattern="[A-Za-z ]+"> <br>
                        </fieldset>

                        <fieldset id="field_contenu">
                            <legend>Contenu</legend>
                            <textarea id="contenu" name="contenu" required pattern="[A-Za-z ]+"></textarea>
                        </fieldset>
                    </div>
                </div>

                <input type="submit" id="submit" value="Envoyer" onclick="valider()">

            </form>
        </article>
    </main>

    <!-- Validaiton données côté serveur -->

    <?php require 'validationDonnee.php'; ?>

    <!-- FOOTER -->

<?php require 'footer.php'; ?>