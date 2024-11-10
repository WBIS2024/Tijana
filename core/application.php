com<?php

namespace app\core;

class application

{
    public Router $router;

    public function __construct()
    {
        $this-> router = new Router();
    }

    public function  run()

    {
    $this->router->resolve();
    }
}