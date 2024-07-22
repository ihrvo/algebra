<?php

use Core\Database;

if (!isset($_POST['id'] ) || !isset($_POST['_method']) || $_POST['_method'] !== 'PATCH') {
    abort();
}

//TODO: do a validation
    
$data = [
    "id" => $_POST['id'],
    "ime" => $_POST['ime'],
    "prezime" => $_POST['prezime'],
    "adresa" => $_POST['adresa'],
    "email" => $_POST['email'],
];

$db = new Database();
$members = $db->query('SELECT * FROM clanovi WHERE id = ?', [$_POST['id']]);

if(empty($members)){
    abort();
}

try {
    $sql = "UPDATE clanovi SET ime = ?, prezime = ?, adresa = ?, email = ? WHERE id = ?";
    $db->query($sql, [$data['ime'], $data['prezime'], $data['adresa'], $data['email'], $data['id']]);

    redirect('members');
} catch (PDOException $e) {
    // log the error
    echo "<p>There was an error processing your request. Please try again.</p>";
    throw $e;
}