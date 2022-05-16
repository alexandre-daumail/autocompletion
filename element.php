<?php 

require_once('data/dbh.php');

$search = htmlspecialchars($_GET['search']);

$query = $conn->prepare("SELECT * FROM `villes_france_free` WHERE id = :search;");

$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$title = $result[0]['nom_reel'];

include 'header.php';

?>

</body>

</html>