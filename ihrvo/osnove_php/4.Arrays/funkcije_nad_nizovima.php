<?php

$empty_array = [];
$names = ['Pero', 'Alex', 'Marko', 'Filip'];
$names2 = ['Ivica', 'Luka'];

// empty and is set

$is_variable_empty = empty($names);
var_dump($is_variable_empty); // false
echo '<br>';
var_dump(isset($empty_array)); // true

echo '<br>';
$empty_array = null;
var_dump(isset($empty_array)); // false

echo '<br>';

// traženje elemenata
// in_array i array_search
// needle -> ono što tražimo
// haystack -> gdje tražimo
var_dump(in_array('Alex', $names)); // true
echo '<br>';
var_dump(array_search('Alex', $names)); // int(0) -> vraća ključ tamo gdj se nalazi vrijednost koju tražimo
// ako ne pronađe vraća -> false
echo '<br>';
// SORTIRANJE
echo 'SORTIRANJE<br>';
var_dump($names);
echo '<br>';
echo '<pre>';
print_r($names);
echo '</pre>';
ksort($names);
echo '<pre>';
print_r($names);
echo '</pre>';
echo '<br>';

// PUSH AND POP

array_push ($names, 'Hrvoje');
echo '<pre>';
print_r($names);
echo '</pre>';
echo '<br>';
// ARRAY POP -> zadnji element, također ga makne iz arraya
$last_element = array_pop ($names);
echo $last_element;
echo '<pre>';
print_r($names);
echo '</pre>';
echo '<br>';

// ARRAY SHIFT - prvi element, također ga makne iz arraya
$first_element = array_shift ($names);
echo $first_element;
echo '<pre>';
print_r($names);
echo '</pre>';
echo '<br>';

var_dump(array_keys($names));
echo '<br>';
var_dump(array_values($names));
echo '<br>';
var_dump(count($names));
echo '<br>';
echo '<pre>';
print_r(array_merge($names, $names2));
echo '</pre>';