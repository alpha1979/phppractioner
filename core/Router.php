<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    // public function define($routes)
    // {
    //     $this->routes = $routes;
    // }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            // return $this->routes[$method][$uri];
            // var_dump(explode('@', $this->routes[$method][$uri]));
            // die();
            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );
        }

        throw new Exception('No routes defined');
    }

    protected function callAction($controller, $action)
    {
        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} doesnt respond to the {$action}");
        }
        return (new $controller)->$action();
    }
}