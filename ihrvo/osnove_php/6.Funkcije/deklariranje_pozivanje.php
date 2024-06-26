<?php


// funkcija bez parametara
function writeHrvoje()
{
    echo "Hello Hrvoje<br>";
}

writeHrvoje();

// funkcija sa jednim argumentom
function writeName2(string $name): void
{
    echo "Hello $name";
}

writeName2('Mario<br>');