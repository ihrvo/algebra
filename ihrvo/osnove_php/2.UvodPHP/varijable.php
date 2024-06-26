<?php

// imena varijbli su osjetljiva na velika i mala slova

$ime = 'hrvoje';
$Ime = 'Hrvoje';

echo $ime;
echo '<br>'; 
echo $Ime;

// ime varijable može započeti sa slovom ili _

$_ime;
$ime123;
$ime_prezime; // -> Snake case -> više u sql
$imePrezime; // -> Camel case -> više u php-u

// KONSTANTE
// imena konstanti trebalo bi pisati velikim slovima
define("PI", 3.14);
const OIB = '12542548547'; // moderan način
echo "<br>Vaš OIB je " . OIB . ', a ime je ' . $Ime . '.<br>'; // kontakenacija stringova
echo gettype(OIB)."<br>";

$bool = true;
echo $bool ? 'DA' : 'NE';
echo "<br>";

$test = 10000.5;

$fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
echo numfmt_format_currency($fmt, $test, "EUR")."<br>";


