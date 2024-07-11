<?php

require './../inc/dsn.php';

$sql = 'SELECT f.id, f.naslov, f.godina, z.ime FROM filmovi f JOIN zanrovi z ON f.zanr_id = z.id';
$statement = $pdo->prepare($sql);
$statement->execute();

$movies = $statement->fetchAll(PDO::FETCH_ASSOC);

$pageTitle = 'Filmovi';

require './../views/movies.view.php';