<?php

require_once('data/dbh.php');

$search = htmlspecialchars($_GET['search']);

$query = $conn->prepare("SELECT * FROM `villes_france_free` WHERE nom_simple = :search;");
$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$title = $result[0]['nom_reel'];

include 'header.php';

?>
<main class="container mt-5">
    <section class="row">
        <div class="col-md-6 m-auto">

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Ville :</div>
                <div class="card-body">
                    <h4 class="card-title"><?= $result[0]['nom_reel'] ?></h4>
                    <table>
                        <tbody>
                            <tr>
                                <th scope="row">Code Postal</td>
                                <td class="text-right"><?= $result[0]['code_postal'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Superficie</td>
                                <td class="text-right"><?= $result[0]['surface'] ?> km²</td>
                            </tr>
                            <tr>
                                <th scope="row">Densité (2010)</td>
                                <td class="text-right"><?= $result[0]['densite_2010'] ?> hab./km²</td>
                            </tr>
                            <tr>
                                <th scope="row">Population (2012)</td>
                                <td class="text-right"><?= $result[0]['population_2012'] ?> hab.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>