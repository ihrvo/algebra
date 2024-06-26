<?php

// jezici kao PHP su strictly ili stingly type

//integer -> dekdaski , oktalni ili hexadecimalni

$int_var = 123;
$int_var = -123;

// realni, decimalni, FLOAT, DOUBLE, REAL NUMBERS

$float_var = 0.123;
$float_var = 0.123e8;
//$float_var = 0,123; //-> neispravno

// STRING

$str = 'Tekst u prvom redu \n<br> $float_var  \\Tekst u drugom redu unutar jednostrukih \' \' ';
echo $str;
echo '<br>';
$str = "Tekst u prvom redu \n<br> $float_var  Tekst u drugom redu unutar dvostrukih ";
echo $str;
echo '<br>';
echo '<br>';

// Logičke vrijednosti - BOOLEAN

$true = true;
$false = false;


$age = 20;
$is_of_age = ($age >= 18);
echo $is_of_age;

// KASTANJE
(bool)$a;
(string)$a; // -> promjena tipa podatka

var_dump((string)$a);

$var = 12; // Integer -> cjelobrojne vrijednosti
$float = 1.34; // Float -> brojevi sa pokretnim zarezom
$array = [1,2,3]; // Array -> nizovi znakova
$string = 'Rečenica'; // 
$bollean = false; // boll -> logičke vrijednosti
$obj = new stdClass(); // objekt
$nullValue = null; // NULL - može se pisati malim ili velikim slovima, nepostojeća vrijednst

