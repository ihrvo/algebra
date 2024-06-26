<?php

$a = 10;
$b = 0;

var_dump(!$b);  //true,  operator negacije !, pretvara u true ili false
echo '<br>';

var_dump ($a && $b); // AND operator, (na hr operator konjukcije) zahtijeva da su svi izrazi istiniti kako bi vratio TRUE
echo '<br>'; 
var_dump ($a and $b); // može i and
var_dump(! ($a>$b) && ($b == $a)); // false
echo '<br>'; 

var_dump ($a || $b); // OR operator, zahtijeva da jedan izraz istinit kako bi vratio TRUE
// || -> zovemo pipe
echo '<br>'; 
var_dump(! ($a>$b) && ($b == $a)); // false
echo '<br>'; 
echo '<br>'; 

// PRIORITETI -> prednost pri izvođenju izraza
// ()
// !
// */
// %
// +-
// <>
// !==
// &&
// ||



$var = false;
$var = 0;
$var = 0.0;
$var = '';
$var = '0';
$var = [];
$var = NULL;



if (! null ) {
    echo "Izraz je istinit.";
}


