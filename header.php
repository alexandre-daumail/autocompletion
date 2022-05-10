<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="script.js"></script>
    <title><?= $title ?></title>
</head>

<body>

    <header>
        <a class="active" href="index.php">Accueil</a>

        <div class="search-container">

            <form action="recherche.php" method="get">

                <button type="submit"><i class="fa fa-search"></i></button>
                
            </form>
        </div>
        
    </header>
