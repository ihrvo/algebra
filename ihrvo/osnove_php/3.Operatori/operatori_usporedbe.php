<?php

$a = 10;
$b = '10';

var_dump ($a == $b); // true --> jednako
echo '<br>';
var_dump ($a === $b); // false --> identično
echo '<br>';
var_dump ($a < $b); // false -> i <=
echo '<br>';
var_dump ($a > $b); // false -> i >=
echo '<br>';
var_dump ($a != $b); // false -> ili <>
echo '<br>';
var_dump ($a !== $b); // true
echo '<br>';
$a > $b;