<?php

// VJEŽBA 1
/*
- Proizvoljno deklarirajte funkciju koja vraća neki tekst.
- Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
- Ispišite vrijednost varijable.
*/

function vratiTekst() 
{
    return 'Tekst vraćen iz funkcije.<br>';
}

$vraceniTekst = vratiTekst();
echo $vraceniTekst;

// VJEŽBA 2
/*

- Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija treba 
konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih lokalnoj 
varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao rezultat.
- Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
- Ispišite vrijednost varijable.


*/

function ImePrezime($name, $surname)
{
    $result = mb_strtoupper( $name.' '.$surname, 'UTF-8'); //The mb_strtoupper() function is a multibyte safe version of strtoupper() function in PHP. It's used to convert all the multibyte characters in a string to uppercase. The second argument specifies the character encoding you are working with.
    return $result;
}

$ImePrezime = ImePrezime('Hrvoje', 'Ivančić<br>');
echo $ImePrezime;

// VJEŽBA 3
/*
- Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati lokalnu 
varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao rezultat. Vrijednost 
treba biti zadržana kod svakog poziva funkcije.
- Deklarirajte funkciju kao varijablu.
- Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u
rasponu od 1 do 10 te ispišite rezultat.
- Ponovite postupak pet puta.
*/

function slucajniOdabir(int $broj)
{
    static $a = 0; // ako se ne setira na 0, automatski stavlja na 0
    $a += $broj;
    return $a;
}

$func ='slucajniOdabir';

for ($i=1; $i < 6; $i++) { 
    echo 'Stari zbroj: '.slucajniOdabir(0).' | '.$i.'. slučajni broj: '.$func(rand(5, 10)).'<br>';
}
