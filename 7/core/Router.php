<?php

namespace App\Core;

class Router 
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file) {
        $router = new static;
        
        require $file;

        return $router;
    }

    public function define($routes) {
        $this->routes = $routes;
    }

    public function direct($uri, $requestType) {

        if(array_key_exists($uri, $this->routes[$requestType])) {

            // PagesController@... = $this->routes[$requestType][$uri]

            // explode('@', $this->routes[$requestType][$uri]); // разделяет строку на массив, разделить - 1й аргумент

            // $args = explode('@', $this->routes[$requestType][$uri]);

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri]) // spread оператор - передать в аргументы элементы ф-ции
            //    $args[0],
            //    $args[1]
            );
        }

        throw new Exception('Error 404 - page not found');

    }

    public function get($uri, $controller) {

        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller) {

        $this->routes['POST'][$uri] = $controller;

    }

    protected function callAction($controller, $action) {

        $controller = "App\\Controllers\\{$controller}"; // т.к. имена повторяются исп. \\ 

        if(! method_exists($controller, $action)) { // если в контроллере нет такого метода

            throw new Exception(
                "{$controller} does not respond to the {$action} action"
            );

        }

        // создать новый объект $conroller (new $conroller)

        return (new $controller)->$action();

    }

}