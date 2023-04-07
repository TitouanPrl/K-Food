<? session_start();

    /* On crée le tableau représentant le panier */
    $panier = array(
        "plat" => array(
            "Bibimbap" => array(
                "prix" => "10€",
                "stock" => "669",
            ),

            "Naengmyeon" => array(
                "prix" => "5€",
                "stock" => "63",
            ),

            "Kimchi Jjigae" => array(
                "prix" => "8€",
                "stock" => "69",
            ),

            "Kimbap" => array(
                "prix" => "15€",
                "stock" => "78",
            ),

            "Mandu" => array(
                "prix" => "7€",
                "stock" => "89",
            ),
        ),

        "dessert" => array(
            "Gyeongdan" => array(
                "prix" => "15€",
                "stock" => "6",
            ),

            "Hotteok" => array(
                "prix" => "10€",
                "stock" => "14",
            ),

            "hodu-gwaja" => array(
                "prix" => "7€",
                "stock" => "63",
            ),

            "Gogumattang" => array(
                "prix" => "10€",
                "stock" => "52",
            ),

            "Hwajeon" => array(
                "prix" => "7€",
                "stock" => "43",
            ),
        ),

        "resto" => array(
            "Flavors" => array(
                "prix" => "47€ à 112€",
                "stock" => "142",
            ),

            "Jangseng Geongangwon" => array(
                "prix" => "11€ à 728€",
                "stock" => "14",
            ),

            "853" => array(
                "prix" => "11€ à 22€",
                "stock" => "68",
            ),

            "Jihwaja" => array(
                "prix" => "69€ à 142€",
                "stock" => "6",
            ),

            "Jungsik" => array(
                "prix" => "47€ à 140€",
                "stock" => "57",
            ),
        ),
        
    );

    /* On le passe en variable de session */
    $_SESSION["Panier"] = $panier;


?>