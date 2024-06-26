<?php

$a = 10;
$b = 20;

$a++;// Ekvivalent $a + 1; 

echo 'A je: '. $a.'<br>';

++$b; // -> postaje 21
echo 'B je: '. $b.'<br>'; // 21

echo 'B je: '. $b--.'<br>'; // 21 i dalje jer prvo ispiše, a onda oduzme

echo 'B je: '. --$b.'<br>'; // 19 jer prvo oduzme, a onda ispiše
