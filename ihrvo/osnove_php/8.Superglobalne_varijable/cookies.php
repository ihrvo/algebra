<?php

var_dump(time());

$expiresIn = time() + 60 * 60;

setcookie('user', 'Hrvoje', $expiresIn, '/');

var_dump($_COOKIE);

setcookie('user', 'Hrvoje', time() - 60 * 60, '/'); // briše cookie