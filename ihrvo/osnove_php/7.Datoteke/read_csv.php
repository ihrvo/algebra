<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

// if(($handle = fopen(USERS_CSV, 'r')) !== false) {
if(false !== $handle = fopen(USERS_CSV, 'r')) { // JODA STYLE
    // $handle = fopen(USERS_CSV, 'r');

    $headers = fgetcsv($handle);
    
    $data = [];
    //while(fgetcsv($handle) !== false) {
    while(($row = fgetcsv($handle)) !== false) {
        // $data[] = array_combine(['id', 'name', 'email', 'age', 'country'], $row);
        $data[] = array_combine($headers, $row);
        
    }

    fclose($handle);
    
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

} else {
    echo 'Unable to open the file.';
}

