<?php

namespace Tests\Modules;

use Portfolio\Router;

class ErroredModule
{

    public function __construct(Router $router)
    {
        $router->get('/demo', function () {
            return new \stdClass();
        }, 'demo');
    }
}