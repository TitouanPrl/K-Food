<? session_start();

    /* On crée le tableau des catégories */
    $cat = array(
        "plat" => array(
            "Bibimbap" => array(
                "img" => "../img/Bibimbap.jpg",
                "prix" => "10€",
                "stock" => "669",
            ),

            "Naengmyeon" => array(
                "img" => "../img/Naengmyeon.png",
                "prix" => "5€",
                "stock" => "63",
            ),

            "Kimchi Jjigae" => array(
                "img" => "../img/Kimchi Jjigae.jpg",
                "prix" => "8€",
                "stock" => "69",
            ),

            "Kimbap" => array(
                "img" => "../img/Kimbap.jpg",
                "prix" => "15€",
                "stock" => "78",
            ),

            "Mandu" => array(
                "img" => "../img/Mandu.jpg",
                "prix" => "7€",
                "stock" => "89",
            ),
        ),

        "dessert" => array(
            "Gyeongdan" => array(
                "img" => "../img/Gyeongdan.jpg",
                "prix" => "15€",
                "stock" => "6",
            ),

            "Hotteok" => array(
                "img" => "../img/Hotteok.jpeg",
                "prix" => "10€",
                "stock" => "14",
            ),

            "hodu-gwaja" => array(
                "img" => "../img/hodu-gwaja.jpg",
                "prix" => "7€",
                "stock" => "63",
            ),

            "Gogumattang" => array(
                "img" => "../img/Gogumattang.jpg",
                "prix" => "10€",
                "stock" => "52",
            ),

            "Hwajeon" => array(
                "img" => "../img/Hwajeon.jpg",
                "prix" => "7€",
                "stock" => "43",
            ),
        ),

        "resto" => array(
            "Flavors" => array(
                "img" => "../img/Flavors.jpg",
                "prix" => "47€ à 112€",
                "stock" => "142",
            ),

            "Jangseng Geongangwon" => array(
                "img" => "../img/Jangseng Geongangwon.png",
                "prix" => "11€ à 728€",
                "stock" => "14",
            ),

            "853" => array(
                "img" => "../img/853.jpg",
                "prix" => "11€ à 22€",
                "stock" => "68",
            ),

            "Jihwaja" => array(
                "img" => "../img/Jihwaja.jpg",
                "prix" => "69€ à 142€",
                "stock" => "6",
            ),

            "Jungsik" => array(
                "img" => "../img/Jungsik.jpg",
                "prix" => "47€ à 140€",
                "stock" => "57",
            ),
        ),
        
    );

    /* On le passe en variable de session */
    $_SESSION["Categories"] = $cat;


?>