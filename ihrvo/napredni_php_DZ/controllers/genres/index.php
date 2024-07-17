<?php

$db = new Database();

try {
    $sql = "SELECT * from zanrovi ORDER BY id";
    $genres = $db->query($sql);
} catch (\Exception $exception) {
    die("Connection failed: {$exception->getmessage()}");
}

$pageTitle = 'Zanrovi';

require '../views/genres/index.view.php';