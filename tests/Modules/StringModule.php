<?php

namespace Tests\Modules;

use Portfolio\Router;

class StringModule
{

    public function __construct(Router $route)
    {
        $route->get('/demo', function () {
            return 'DEMO';
        },
            'demo');
    }
}