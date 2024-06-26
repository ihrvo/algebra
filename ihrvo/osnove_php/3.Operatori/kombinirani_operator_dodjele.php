<?php

$a = 1;
$b = 2;

echo $a += $b; // Ekvivalent $a = $a + $b
echo '<br>';
echo $a -= $b; // Ekvivalent $a = $a - $b
echo '<br>';
echo $a *= $b; // Ekvivalent $a = $a * $b
echo '<br>';
echo $a /= $b; // Ekvivalent $a = $a / $b
echo '<br>';
echo "modulo".$a %= $b; // Ekvivalent $a = $a % $b
echo '<br>';
echo $a .= $b; // Ekvivalent $a = $a . $b
echo '<br>';

// $print = print $a .= $b; // print može u funkciju

echo $a .= $b.'<br>';
echo 'Novi redak<br><br>';
echo $a;

var_dump($a . $b);