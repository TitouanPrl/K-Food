<?php
session_start();
?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <title>K-Food</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" type="image/png" href="../img/korean_food.png">
    <script src="../js/script.js"></script>
    

</head>

<body>
    <!-- HEADER -->

    <header>
        <h1>WELCOME TO K-FOOD</h1>

        <img id="logo" src="../img/korean_food.png" alt="logo">

        <nav>
            <a href="index.php">Accueil</a>
            <a href="categories.php?cat=plat">Plats</a>
            <a href="categories.php?cat=dessert">Desserts</a>
            <a href="categories.php?cat=resto">Restaurants populaires</a>
            <a href="contact.php">Nous contacter</a>
        </nav>

    </header>