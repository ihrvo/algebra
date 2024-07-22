<?php

class Router { // ideja prema https://tech.jotform.com/what-is-router-and-how-to-create-your-own-router-with-php-fad811cf2873
    
    private array $routes; 

    public function addRoutes(array $routes) { // dodaje rute definirane u arrayu u index,php-u 
        $this->routes = $routes;
    }

    public function requiredFile(string $uri) { // pretrazuje da li u arrayu postoji ruta koju je korisnik unio/kliknuo i vraća putanju na required file
        $result = ''; // ako ruta ne postoji $result će ostati prazan i vratiti 404

        foreach ($this->routes as $route => $require):
            if ($uri === $route):
                $result = $require; // ako ruta postoji $result je putanja do datoteke koju želimo ubaciti
            endif;
        endforeach;

        if ($result  !== ''): // ruta postoji
            return $result;
        else: // ruta nije pronađena te vraća rutu na 404
            return 'views/errors/404.php';
        endif;

    }
}