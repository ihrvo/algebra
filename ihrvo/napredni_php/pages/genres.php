<?php
include_once ('./../inc/Baza.php');

$genresObject = new Baza();
$sql = 'SELECT * FROM zanrovi';
$genres = $genresObject -> runSql($sql);

require './../views/genres.view.php';