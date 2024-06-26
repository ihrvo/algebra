<?php

echo '<br>FOREACH<br><br>';

$names = ['Ivo', 'Pero', 'Marko'];
var_dump($names);

foreach ($names as $name) {
    echo "$name ";
}

echo '<br>FOREACH 2<br><br>';

foreach ($names as $key => $name) {
    echo ++$key . " - $name<br>";
}

echo '<br>FOREACH 3<br><br>';

$users = [
    [
        "id" => 1,
        "name" => "John Doe",
        "email" => "john@example.com",
        "age" => 30
    ],
    [
        "id" => 2,
        "name" => "Jane Smith",
        "email" => "jane@example.com",
        "age" => 25
    ],
    [
        "id" => 3,
        "name" => "Mike Johnson",
        "email" => "mike@example.com",
        "age" => 35
    ],
    [
        "id" => 4,
        "name" => "Emily Davis",
        "email" => "emily@example.com",
        "age" => 28
    ],
    [
        "id" => 5,
        "name" => "Chris Brown",
        "email" => "chris@example.com",
        "age" => 40
    ]
];

foreach ($users as $key => $user) {
    echo ++$key . '. ';
    foreach ($user as $key2 => $value) {
        echo "$key2 - $value<br>";
    }
}


