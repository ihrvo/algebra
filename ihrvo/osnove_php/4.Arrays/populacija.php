<?php

$names = ['Alex', 'Filip', 'Marko'];
$names [5] = 'Robert';
$names [] = 'Angelo';

echo '<pre>';
print_r ($names);
echo '</pre>';

$fruits = [
    'ime' => 'Banana',
    'cijena' => '12 EUR',
    'klasa' => 1
];
$fruits['masa'] = 2;
$fruits['klasa'] = 3;

echo '<pre>';
print_r ($fruits);
echo '</pre>';

// Ulanjanje elementa iz niza
unset($fruits['ime']);

echo '<pre>';
print_r ($fruits);
echo '</pre>';