<?php
function staticScope()
{

    static $a = 0;
    echo $a;
    $a++;
}

staticScope();
staticScope();
staticScope();