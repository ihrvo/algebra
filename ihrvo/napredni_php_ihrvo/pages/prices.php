<?php

require './../inc/dsn.php';

$sql = "SELECT * from cjenik;";
$statement = $pdo->prepare($sql);
$statement->execute();

$prices = $statement->fetchAll(PDO::FETCH_ASSOC);

$pageTitle = 'Cjenik';

require './../views/prices.view.php';