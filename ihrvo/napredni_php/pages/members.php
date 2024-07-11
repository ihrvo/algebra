<?php

require './../inc/dsn.php';

$sql = "SELECT * from clanovi;";
$statement = $pdo->prepare($sql);
$statement->execute();

$members = $statement->fetchAll(PDO::FETCH_ASSOC);

$pageTitle = 'Članovi';

require './../views/members.view.php';