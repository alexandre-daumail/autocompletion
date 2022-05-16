<?php

$title = "Accueil";

include 'header.php'

?>



<main class="container mt-5">
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3 class="text-center mb-3">Villes de France</h3>
            <form class="d-flex" data-dashlane-rid="dd1b585e24267cb7" data-form-type="">
                <input id="search" class="form-control me-sm-2" type="text" placeholder="Recherche...">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul id="matchList"></ul>
            <ul id="matchList2"></ul>
        </div>

    </div>
</main>

</body>

</html>