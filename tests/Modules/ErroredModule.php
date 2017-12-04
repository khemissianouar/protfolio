<?php
namespace Tests\Modules;
class ErroredModule{

    public function __construct(\Portfolio\Router $router)
    {
        $router->get('/demo',function (){ return new \stdClass();},'demo');
    }
}