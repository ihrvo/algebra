<?php

require './../inc/dsn.php';

$sql = "SELECT * from mediji;";
$statement = $pdo->prepare($sql);
$statement->execute();

$medias = $statement->fetchAll(PDO::FETCH_ASSOC);

$pageTitle = 'Mediji';

require './../views/media.view.php';