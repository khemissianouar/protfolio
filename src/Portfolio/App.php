<?php
namespace Portfolio;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class App

{

private $modules=[];
    /**
     *  Router
     * @var Router
     */
private $router;
public function __construct(array $modules=[])
{
        $router = new Router();
        foreach ($modules as $module){
        $this->modules[]=new $module($router);
    }

}

    public function run(ServerRequestInterface $request)
    {

        $uri = $request->getUri()->getPath();
        if (!empty($uri) && $uri[-1] === "/") {
            return (new Response())->withStatus(301)->withHeader('location', substr($uri, 0, -1));
        }

        if ($uri === '/blog') {
            return new Response(200, [], '<h1>Bienvenue dans le blog</h1>');
        }
        $route = $this->router->match($request);
        if (is_null($route)) {
            return new Response(404, [], '<h1>Erreur 404</h1>');
        }
        $parameters=$route->getParameters();
        $request = array_reduce(array_keys($parameters), function ($request, $key) use ($parameters) {
            return $request->withAttribute($key, $parameters[$key]);},$request);

        $response = call_user_func_array($route->getCallback(), [$request]);
        if (is_string($response)) {
            return new Response(200, [], $response);
        } elseif ($response instanceof ResponseInterface) {
            throw new \Exception('the response is not a string or instance of Responseinterface');
        }

    }

}
