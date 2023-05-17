USE KFood;

/* On remplit la liste des clients */
INSERT INTO Client VALUES (0, 'Titouan', '1f0e3dad99908345f7439f8ffabdffc4', false, false);
INSERT INTO Client VALUES (1, 'Achille', '14245d919092895628a9a07e3690dbed', false, false);
INSERT INTO Client VALUES (2, 'Paularis', 'f133ac4dce233e252cefa2d67369e622', false, true);
INSERT INTO Client VALUES (3, 'Yan', 'fe9446d25159c43d10c3a60b122c771c', false, false);
INSERT INTO Client VALUES (4, 'Nico', '3ae7f3a97f45b4c0f0663e120a1ebef0', false, false);

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

/* On remplit la liste des items possibles dans le panier */
INSERT INTO Panier VALUES ("Bibimbap", "10€", 0);
INSERT INTO Panier VALUES ("Naengmyeon", "5€", 0);
INSERT INTO Panier VALUES ("Kimchi Jjigae", "8€", 0);
INSERT INTO Panier VALUES ("Kimbap", "15€", 0);
INSERT INTO Panier VALUES ("Mandu", "7€", 0);
INSERT INTO Panier VALUES ("Gyeongdan", "15€", 0);
INSERT INTO Panier VALUES ("Hotteok", "10€", 0);
INSERT INTO Panier VALUES ("Hodou gwaja", "7€", 0);
INSERT INTO Panier VALUES ("Gogumattang", "10€", 0);
INSERT INTO Panier VALUES ("Hwajeon", "7€", 0);
INSERT INTO Panier VALUES ("Flavors", "47€", 0);
INSERT INTO Panier VALUES ("Jangseng Geongangwon", "11€", 0);
INSERT INTO Panier VALUES ("853", "11€", 0);
INSERT INTO Panier VALUES ("Jihwaja", "69€", 0);
INSERT INTO Panier VALUES ("Jungsik", "47€", 0);
