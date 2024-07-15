<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

return [
    'host' => 'localhost',
    'dbname' => 'videoteka',
    'user' => 'algebra',
    'password' => 'algebra',
    'charset' => 'utf8mb4',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ],
];