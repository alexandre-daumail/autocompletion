<?php

$host = 'localhost';
$dbname = 'autocompletion';
$username = 'root';
$password = '';

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "<p>Connected to $dbname at $host successfully.</p>";
} catch (PDOException $pe) {

    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

//  Get cities name
$get = $conn->prepare("SELECT ville_nom FROM villes_france_free");
$get->execute();
$res = $get->fetchAll(PDO::FETCH_ASSOC);

$myJSON = json_encode($res);

echo $myJSON;