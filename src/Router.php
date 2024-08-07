<?php

namespace App;


class Router
{
    protected $routes = [];
    protected $app;


    //
    public function __construct($app)
    {
        $this->app = $app;
    }
    public function get($uri, $handler)
    {
        $this->routes['Get'][$uri] = $handler;
    }

    public function dispatch($request)
    {
        $uri = $request->getUri();

        $method = ucfirst(strtolower($request->getMethod()));
        if (isset($this->routes[$method][$uri])) {

            $handler = $this->routes[$method][$uri];
            list($controller, $action) = explode('@', $handler);
            $controller = 'App\\Controllers\\' . $controller;

            if (class_exists($controller) && method_exists($controller, $action)) {
                $controllerInstance = new $controller();
                return $controllerInstance->$action();
            }
        }
        return '404 Not Found';
    }
}
