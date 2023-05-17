# README
## TP 4 de Dev Web : Le Catalogue
### Table des matières
1. [Lancer le serveur](#initialiser-la-bdd)
2. [Initialiser la BDD](#ouvrir-le-site)
3. [Ouvrir le site](#ouvrir-le-site)
4. [Se connecter](#se-connecter)
5. [Fonctionnalités](#fonctionnalités)

#### Lancer le serveur
***
Pour lancer le serveur :
```sh   
"php -S localhost:8080" dans le dossier src/ une fois l'archive extraite
```

#### Initialiser la BDD
***
Pour créer la BDD et l'initialiser :
```sh
- Ouvrir http://localhost/phpmyadmin/
- Rentrer les identifiants suivant : "utilisateur : root" et pas de mot de passe
- Dans l'onglet "Importer" importer les fichiers kfood.sql puis kfoodData.sql
```

Si la connexion ne fonctionne pas, utilisez un compte SQL déjà présent sur votre machine.

#### Ouvrir le site
***
Pour ouvrir le site :
```sh
- Ouvrir votre navigateur 
- Entrer http://localhost:8080/php/index.php dans la barre d'adresse
```

#### Se connecter
***
Rentrez un des identifiants se trouvant dans /Archives/user.xml

#### Fonctionnalités
***
- Se connecter en tant qu'administrateur : 
    id : Paularis
    mpd : Paularis
- Ajouter des produits au panier via les boutons dédiés

### Crédits
***
Auteur : PRADAL Titouan <pradaltito@cy-tech.fr>