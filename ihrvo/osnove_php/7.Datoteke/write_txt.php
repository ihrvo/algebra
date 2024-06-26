<?php

const FILE_PATH = __DIR__ . '/podaci/polaznici.txt';
$text = "Nikolina Pelivan\n";
$handle = fopen(FILE_PATH, 'a');

if (false !== $handle) {
    if(fwrite($handle, $text)) {
        echo 'Uspjeh!';
    }
    else {
        echo 'Unable to append the file.';
    }
    

    fclose($handle);
}
else {
    echo 'Unable to open the file.';
}