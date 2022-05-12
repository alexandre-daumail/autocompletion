<?php session_start(); ?>

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/script.js"></script>
    <title><?php $title ?></title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Villes de France</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Accueil
                                <?php if ($title == "Accueil") {
                                    echo '<span class="visually-hidden">(current)</span>';
                                } ?>
                            </a>
                        </li>
                    </ul>

                    <?php if ($title !== "Accueil") : ?>

                        <form class="d-flex" data-dashlane-rid="5f957bb9f267380b" data-form-type="">
                            <input class="form-control me-sm-2" type="text" placeholder="Search" data-dashlane-rid="205292a49ab3c33a" data-form-type="">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit" data-dashlane-rid="e4f91b12f2682c02" data-dashlane-label="true" data-form-type="">Search</button>
                        </form>

                    <?php endif; ?>
                    
                </div>
            </div>
        </nav>
    </header>