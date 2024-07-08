<?php
include_once ('include.php');

$genresObject = new Baza();
$sql = 'SELECT * FROM zanrovi';
$genres = $genresObject -> runSql($sql);
echo json_encode($genres);