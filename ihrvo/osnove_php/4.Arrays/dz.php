<?php
// VJEŽBA 1
echo '<b>VJEŽBA 1</b><br><br>';
$primeNumbers =  [2, 3, 5, 7, 11];
$containsThird = in_array(5, $primeNumbers);
var_dump($containsThird);
echo '<br>';
// if ($containsThird) echo $primeNumbers[2]; else echo "Treći element u nizu ne postoji.";
// ISPRAVAK
var_dump(isset($primeNumbers[2])) ;
echo '<br>';
echo $treci_element = (isset($primeNumbers[2])) ? 'Treći element u nizu postoji' : 'Treći element u nizu ne postoji';
$primeNumbers[] = 13;
echo '<br>';
var_dump(count($primeNumbers));
echo '<pre>';
print_r($primeNumbers);
echo '</pre>';
// ISPRAVAK
//arsort($primeNumbers);
rsort($primeNumbers);
echo '<pre>';
print_r($primeNumbers);
echo '</pre>';

// VJEŽBA 2

$users = [
    [
        'ime' => 'Ivo',
        'prezime' => 'Ivić',
        'godine' => 19,
        'spol' => 'M'
    ],
    [
        'ime' => 'Pero',
        'prezime' => 'Perić',
        'godine' => 29,
        'spol' => 'M'
    ],
    [
        'ime' => 'Marija',
        'prezime' => 'Marijanović',
        'godine' => 30,
        'spol' => 'Ž'
    ],
    [
        'ime' => 'Petra',
        'prezime' => 'Petrić',
        'godine' => 18,
        'spol' => 'Ž'
    ]
];
echo '<b>VJEŽBA 2</b><br>';

echo '<pre>';
print_r($users);
echo '</pre>';

foreach(array_keys($users) as $key) {
    unset($users[$key]['spol']);
 }


echo '<pre>';
print_r($users);
echo '</pre>';

$novi_korisnik =  array (
    'ime' => 'Mario',
    'prezime' => 'Marić',
    'godine' => '34'
  );
array_push ($users, $novi_korisnik);

echo '<pre>';
print_r($users);
echo '</pre>';