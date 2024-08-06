<?php

namespace App;

class Router
{
    protected $routes = [];
    protected $app;

    public function __construct($app)
    {
        $this->app;
    }

    public function get($uri, $handler)
    {
        $this->routes['Get']['$uri'] = $handler;
    }

    public function dispatch()
    {
        $uri = $request->getUri();
        $method = $request->getMethod();

        if (isset($this->routes[$method][$uri])) {
            $handler = $this->routes[$method][$uri];

            return call_user_func($handler);
        }
        return '404 Not Found';
    }
}
