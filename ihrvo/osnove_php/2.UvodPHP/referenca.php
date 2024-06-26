<?php
$a = 5;
$b = $a;
$a = 6;

echo 'A je '. $a. ', B je '. $b . '<br><br>';

$a = 5;
$b = &$a;
$a = 68;

echo 'A je '. $a. ', B je '. $b. '<br><br>';