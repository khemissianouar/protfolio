<?php
namespace Tests\Portfolio\Modules;

class StringModule{

    public function __construct(\Portfolio\Router $route)
    {
        $route->get('/demo',function (){ return 'DEMO';},'demo');
    }
}