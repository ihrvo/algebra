<?php
include_once ('include.php');

$moviesObject = new Baza();
$sql = 'SELECT f.id, f.naslov, f.godina, z.ime FROM filmovi f JOIN zanrovi z ON f.zanr_id = z.id';
$movies = $moviesObject -> runSql($sql);

require 'movies.view.php';