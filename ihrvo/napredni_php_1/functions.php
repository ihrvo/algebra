<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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

function base_path($path): string
{
    return __DIR__ . DIRECTORY_SEPARATOR . $path;
}

function abort($code = 404)
{
    http_response_code($code);
    require base_path("views/errors/404.php");
    die;
}

function redirect($path)
{
    header("Location:/$path");
    exit();
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

