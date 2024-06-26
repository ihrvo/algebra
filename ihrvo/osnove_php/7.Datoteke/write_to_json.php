<?php

const FILE_PATH = __DIR__ . '/podaci/knjige.json';

$books = file_get_contents(FILE_PATH);

$books = json_decode($books, true);

$books[] = [
    "title" => "Knjiga",
    "author" => "pisac",
    "available" => true,
    "pages" => 324,
    "isbn" => 123412341234
];
echo '<pre>';
var_dump($books);
echo '<br>';
$books = json_encode($books);
var_dump($books);
file_put_contents(FILE_PATH, $books);