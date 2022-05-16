<?php

require_once("dbh.php");


//  Get cities name
$get = $conn->prepare("SELECT id, nom_reel, code_postal FROM villes_france_free");
$get->execute();
$res = $get->fetchAll(PDO::FETCH_ASSOC);

$myJSON = json_encode($res);

echo $myJSON;