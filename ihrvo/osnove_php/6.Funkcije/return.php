<?php

function addTwoNumbers(int $a, int $b): int // <- ovo :int definira tip podatka koji želimo da funkcija vraća
{
    return $a + $b;
}

echo addTwoNumbers(8, 16);