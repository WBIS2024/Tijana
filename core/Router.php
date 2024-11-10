<?php

namespace app\core;

class Router
{

    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
    }

    public array $routes = [];
    ['userCreate','userController']
    ['userUpdate','userController']

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve(){

        $path = $this->path->path();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        echo "<pre>";
        var_dump(this->routes);

    }
}