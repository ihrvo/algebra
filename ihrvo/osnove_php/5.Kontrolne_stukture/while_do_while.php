<?php

$i = 1;

echo 'WHILE<br>';
while ($i <= 10) {
    echo "$i ";
    $i++;
}

echo '<br>DO WHILE<br>';

$i = 2;

do {
    echo "$i ";
    $i += 2;;
} while ($i <= 100);
setlocale(LC_ALL,'croatian'); 
$month_name = date('d.M.Y.');
echo $month_name;
// variabla $hrformat sadržava opcije koje želimo prikazati 
$hrformat = "Danas je %d. dan %A, %m. mjesec imena %B,%Y. godine i vrijeme je %H:%M:%S"; 
// sa setlocal definiramo našu kodnu stanicu setlocale(LC_ALL,'croatian'); 
// variabla $res sadržava strftime funkciju za koverziju stringa u lokalni format 
$res = strftime($hrformat); 
echo $hrformat;
// variabla $vrijeme koristi iconv funkcije za definiciju kodnih stanica u upotrebi 
$vrijeme = iconv('ISO-8859-2', 'UTF-8', $res);
echo iconv('ISO-8859-2', 'UTF-8',strftime('d. %B,%Y',strtotime(get_the_time('m/d/Y')))); 