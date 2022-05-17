<?php

require_once('data/dbh.php');

$search =  htmlspecialchars($_GET['search']) . "%";

$query = $conn->prepare("SELECT nom_simple, nom_reel FROM `villes_france_free` WHERE `nom_simple` LIKE :search LIMIT 0,25;");
$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);die;

$title = "Recherche : " . htmlspecialchars($_GET['search']);

include 'header.php';
?>

<main class="container mt-5">
    <section class="row">

        <div class="col-md-6 m-auto">

            <h3 class="text-center mb-3">Votre recherche</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Ville</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        foreach ($result as $ville) {
                            
                                 echo "<tr>
                                        <th scope='row'><a href='element.php?search=" . $ville['nom_simple'] . "'>" . $ville['nom_reel'] . "</a></th>
                                 </tr>";
                           
                           
                        }
                    ?>
                </tbody>

        </div>

    </section>
</main>

</body>

</html>