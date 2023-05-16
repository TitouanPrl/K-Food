/* On remplit la liste des clients */
INSERT INTO Client ('login', 'mdp', 'connect') VALUES ('Titouan', '19', false);
INSERT INTO Client ('login', 'mdp', 'connect') VALUES ('Achille', 'Coree', false);
INSERT INTO Client ('login', 'mdp', 'connect') VALUES ('Paularis', 'Paularis', false);
INSERT INTO Client ('login', 'mdp', 'connect') VALUES ('Yan', 'Coupole', false);
INSERT INTO Client ('login', 'mdp', 'connect') VALUES ('Nico', 'GoatSis', false);

/* On remplit la liste des plats */
INSERT INTO Plats VALUES ("../img/Bibimbap.jpg", "Bibimbap", " <br> Tout simplement du riz, qui est mélangé la plupart du temps avec des légumes et de la viande", "10€", 669);
INSERT INTO Plats VALUES ("../img/Naengmyeon.png", "Naengmyeon", " <br> Le naengmyeon est cuisiné à base de nouilles servies froides !", "5€", 63);
INSERT INTO Plats VALUES ("../img/Kimchi Jjigae.jpg", "Kimchi Jjigae", " <br> Vous pouvez trouver à l’intérieur de ce plat de la viande, des fruits de mer, du tofu, des oignons ou encore de la pâte de haricots fermentés", "8€", 69);
INSERT INTO Plats VALUES ("../img/Kimbap.jpg", "Kimbap", " <br> On retrouve du riz roulé dans une feuille d'algue séchée, avec en son centre de la garniture (produits cuits/légumes)", "15€", 78);
INSERT INTO Plats VALUES ("../img/Mandu.jpg", "Mandu", " <br> Les mandu sont en fait des ravioles coréennes", "7€", 89);

/* On remplit la liste des desserts */
INSERT INTO Desserts VALUES ("../img/Gyeongdan.jpg", "Gyeongdan", "", "15€", 6);
INSERT INTO Desserts VALUES ("../img/Hotteok.jpeg", "Hotteok", "", "10€", 14);
INSERT INTO Desserts VALUES ("../img/hodu-gwaja.jpg", "Hodou gwaja", "", "7€", 63);
INSERT INTO Desserts VALUES ("../img/Gogumattang.jpg", "Gogumattang", "", "10€", 52);
INSERT INTO Desserts VALUES ("../img/Hwajeon.jpg", "Hwajeon", "", "7€", 43);

/* On remplit la liste des resto */
INSERT INTO Resto VALUES ("../img/Flavors.jpg", "Flavors", " <br> Fruits de mer & Poisson / Asiatique / Coréenne", "47€", 142);
INSERT INTO Resto VALUES ("../img/Jangseng Geongangwon.jpg", "Jangseng Geongangwon", " <br> Coréenne", "11€", 14);
INSERT INTO Resto VALUES ("../img/853.jpg", "853", " <br> Barbecue / Grillades / Asiatique / Coréenne", "11€", 68);
INSERT INTO Resto VALUES ("../img/Jihwaja.jpg", "Jihwaja", " <br> Coréenne / Végétariens bienvenus /Choix végétaliens", "69€", 6);
INSERT INTO Resto VALUES ("../img/Jungsik.jpg", "Jungsik", " <br> Asiatique / Coréenne / Végétariens bienvenus", "47€", 57);