<?php

$name = 'mirko';

function variableScope()
{

    $name = 'Svemirko';

    echo $name;
}

variableScope();


function variableScope2()
{

    global $name;
    $surname = 'Svemirko';

    echo $name;
}

variableScope2();

