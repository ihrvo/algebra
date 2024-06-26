<?php

$variable = 3;

switch ($variable) {
    case 1:
        echo 'Ponedjeljak';
        break;
    case 2:
        echo 'Utorak';
        break;
    case 3:
        echo 'Srijeda1';
        break;
    case 4:
        echo 'Četvrtak';
        break;
    
    default:
       echo 'Neznam koji je dan.';
        break;
}
echo '<br>';
switch ($variable) {
    case 1: // falling through
    case 2:
    case 3:
        echo 'Srijeda2';
        break;
    case 4:
        echo 'Četvrtak';
        break;
    
    default:
       echo 'Neznam koji je dan.';
        break;
}

// MATCH

echo '<br> MATCH <br>';

$dan = match ($variable) {
     'pon' => 'Ponedjeljak',
     'uto' => 'Utorak',
     'sri' => 'Srijeda',
     default => 'neznam koji je dan'
};

echo $dan;