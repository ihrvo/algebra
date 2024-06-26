<?php
// 1. ZADATAK

echo '<b><i>1. Koristeći petlju while, ispišite prvih deset brojeva.</b></i>';

$i = 1;

echo '<p style="color:ff0000">';

while ($i <= 10) {
    echo "$i ";
    $i++;
}
echo '</p>';

// 2. ZADATAK

echo '<b><i>2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.</i></b>';

$i = 1;

$do_broja = 100;
echo '<p style="color:ff0000">';
for ($i=1; $i <= $do_broja; $i++) { 
    if (($i % 3) === 0) {
        if ($i < ($do_broja-1)) {  // 1. način da nema zadnjeg zareza (bez googlanja:)
            echo "$i, ";
        }
        else {
            echo "$i";
        }
    }
}
echo '</p>';

// 3. ZADATAK

echo '<b><i>3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.<br>
Primjer:<br>
    1 x 1 = 1<br>
    1 x 2 = 2<br>
    ...<br>
    10 x 10 = 100</b></i>';

echo '<p><table border="1" style="color:ff0000">';

for ($a=1; $a <= 10; $a++) {
    echo $prvi_red = ($a === 1) ? '<tr style="font-weight:bold;color:000000;"">' : '<tr>';
        for ($b=1; $b <= 10; $b++) {
            $umnozak = $a * $b;
            echo $prva_kolona = ($b === 1) ? '<td style="text-align: center;font-weight:bold;color:000000">'. $umnozak .'</td>' : '<td style="text-align: center;">'. $umnozak .'</td>';
        }
    echo '</tr>';
}

echo '</table></p>';

// 4. ZADATAK

echo '<b><i>4. Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.<br>
Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti. </b></i>';

$names = ['Pero', 'Matija', 'Ivica', 'Marko', 'Petar'];

echo '<p style="color:ff0000">';
foreach ($names as $key) {
    echo $key." ";
}
echo '<p>';

// 5. ZADATAK

echo '<b><i>5. Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak
Primjer:<br>Harry, Ron, Hermione, Snake</b></i>';

$result = '';

echo '<p style="color:ff0000">';
foreach ($names as $key) { // uz google :)
    $result .= $key.", ";
}
$result = rtrim($result,', ');
echo $result;
echo '<p>';

// 6. ZADATAK

echo '<b><i>6. Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.<br>
Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.<br>
Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.<br>
Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c. </b></i>';

$a = 5;
$b = 10;
$c = 15;

echo '<p style="color:ff0000">';

if ($b < $c && $b > $a) {
    echo 'Broj '. $b .' je između brojeva '. $a .' i '. $c .'.';
} elseif ($b > $c && $b < $a) {
    echo 'Broj '. $b .' je između brojeva '. $a .' i '. $c .'.';
} else {
    echo 'Broj '. $b .' nije između brojeva '. $a .' i '. $c .'.';
}

echo '<p>';

// 7. ZADATAK

echo '<b><i>7. Koristeći uvjetovani tip kontrolne strukture switch ili match ispišite koji je trenutno dan u tjednu. <br>
Za ispravno izvršenu vježbu koristite PHP funkciju date(). Nazivi dana moraju biti na hrvatskom jeziku.</b></i>';
setlocale(LC_ALL,'croatian'); 

$date = date('D');

$dan = match ($date) {
    'Mon' => 'Ponedjeljak',
    'Tue' => 'Utorak',
    'Wed' => 'Srijeda',
    'Thu' => 'Četvrtak',
    'Fri' => 'Petak',
    'Sat' => 'Subota',
    'Sun' => 'Nedjelja',
    default => 'Danas nije dan:)'
};

echo '<p style="color:ff0000">'. $dan .'<p>';