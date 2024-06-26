<?php

session_start();

$_SESSION['user'] = [
    'ime' => 'Hrvoje',
    'adresa' => 'Ulica 44'
];
// $_SESSION = array();

session_destroy();
var_dump($_SESSION);