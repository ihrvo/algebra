<?php
echo '<pre>';
$books = file_get_contents(__DIR__ . '/podaci/knjige.json');

var_dump($books);
echo '<br>';
$books = json_decode($books, true);

print_r($books);

