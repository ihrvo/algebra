<?php


function addnumbers ($a, $b, bool $printResult = false): ?int
{
    $sum = $a + $b;

    if ($printResult === true) {
        echo 'This result is: '. $sum;
        return null;
    }

    return $sum;
}
$sum = addnumbers(3, 4);
var_dump($sum);
echo '<br>';
$sum = addnumbers(3, 4, true);
echo '<br>';
$sum = var_dump($sum);
echo '<br>';
echo addnumbers(3, 4, false);