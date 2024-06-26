<?php


$fruits = [
    [
        'name' => 'Banana',
        'cijena' => '12 EUR',
        'klasa' => 1
    ],
    [
        'name' => 'Jagoda',
        'cijena' => '9 EUR',
        'klasa' => 2
    ],[
        'name' => 'Lubenica',
        'cijena' => '1 EUR',
        'klasa' => 1
    ]
];


// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';

$fruits2 = [
  'banana' =>  [
        'name' => 'Banana',
        'cijena' => '12 EUR',
        'klasa' => 1
    ],
    'jagoda' => [
        'name' => 'Jagoda',
        'cijena' => '9 EUR',
        'klasa' => 2
    ],
    'lubenica' =>[
        'name' => 'Lubenica',
        'cijena' => '1 EUR',
        'klasa' => 1
    ]
];

echo $fruits2['banana']['name'];