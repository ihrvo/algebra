<?php

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}
function showNotification() {
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['message'])){
    if($_GET['message']) {
        $message = $_GET['message'];
        switch ($message) {
            case 1:
                echo '<div class="alert alert-success" role="alert">Zapis je dodan u bazu!</div>';
                break;
            case 2:
                echo '<div class="alert alert-danger" role="alert">Zapis već postoji u bazi!</div>';
                break;
        }
    }
}
}
// // autoload classes
// spl_autoload_register(function ($class_name) {
//     $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);

//     $file = base_path($class_name) . '.php';

//     if (file_exists($file)) {
//         require_once $file;
//     }
// });

// function base_path($path = '/'): string
// {
//     return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path;
// }