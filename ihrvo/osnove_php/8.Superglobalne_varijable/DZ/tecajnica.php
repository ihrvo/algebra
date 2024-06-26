<?php

// 2.
// Dovrsiti zadatak tecajnica.php
// napravit web formu za konverziju EUR u USD
// korisink u formu upisuje iznos u eurima i nakon submita
// vi ispisujete konvertiranu vrijdnost


const URL = 'https://www.hnb.hr/tecajn-eur/htecajn.htm';

$iznosUusd = 0;

$lista = file(URL);

function prettyPrint(array $print) {

    echo '<pre>';
    print_r($print);
    echo '</pre>';

}


array_shift($lista); // makne prvi zapis

// prettyPrint($lista);

foreach ($lista as $valutniRedak) {
    if (str_contains($valutniRedak, 'USD')) {
        break;
    }
}

// echo $valutniRedak;

$usdValues = explode('       ', $valutniRedak);

if(isset($_POST['iznos']) && $_POST['iznos'] !== '') {
    if(is_numeric($_POST['iznos'])) {

        $iznosUeurima = $_POST['iznos'];

        (float)$srednjiTecaj = $usdValues[2];
        $iznosUusd = $srednjiTecaj * $iznosUeurima;
        
    } else {
        echo '<p>Iznos mora biti broj. Koristite točku umjesto zareza.</p>';
    }
} 

// prettyPrint($usdValues);

(float)$srednjiTecaj = $usdValues[2];
//echo 'Srednji tečaj: ' . $srednjiTecaj;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Tečajnica, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
    <label for="input">Upiši iznos u eurima:</label><br>
        <input type="text" id="iznos" name="iznos">
        <br><br>
        <input type="submit" value="Izračunaj iznos u USD">
    </form>
    <br>
    <?php

    if ($iznosUusd !== 0) echo 'Iznos u USD: ' . number_format((float)$iznosUusd, 3);

    ?>
    
</body>
</html>