<?php

require_once '../functions.php';
require_once base_path('Database.php');
require_once base_path('Router.php');

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [ // definiramo rute aplikacije -> ruta => file za include
    '/' => 'controllers/home.php',
    '/members' => 'controllers/members/index.php',
    '/members/create' => 'controllers/members/create.php',
    '/genres' => 'controllers/genres/index.php',
    '/genres/create' => 'controllers/genres/create.php',
    '/genres/store' => 'controllers/genres/store.php',
    '/movies' => 'controllers/movies/index.php'
];

$router = new Router();
$router->addRoutes($routes);
require base_path(''.$router->requiredFile($uri).'');
