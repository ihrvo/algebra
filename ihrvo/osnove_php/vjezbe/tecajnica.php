<?php

const URL = 'https://www.hnb.hr/tecajn-eur/htecajn.htm';

$lista = file(URL);

function prettyPrint(array $print) {

    echo '<pre>';
    print_r($print);
    echo '</pre>';

}


array_shift($lista); // makne prvi zapis

prettyPrint($lista);

foreach ($lista as $valutniRedak) {
    if (str_contains($valutniRedak, 'USD')) {
        break;
    }
}

// echo $valutniRedak;

$usdValues = explode('       ', $valutniRedak);

prettyPrint($usdValues);

$srednjiTecaj = $usdValues[2];
echo 'Srednji tečaj: ' . $srednjiTecaj;