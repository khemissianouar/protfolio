<?php
namespace App\Blog;

use Portfolio\Router;
use Psr\Http\Message\ServerRequestInterface as Request;


class BlogModule{
   public  function __construct(Router $router)
    {
        $router->get('/blog',[$this,'index'],'blog-index');
        $router->get('/blog/{slug:[a-z\-]+}',[$this,'show'],'blog-show');
    }
    public function index(ServerRequestInterface $request): string
    {
       return '<H1>Bienvenue sur le blog</H1>';
    }
    public function show(Request $request): string
    {
       return '<H1>Bienvenue sur l\'article'.$request->getAttribute('slug').'</H1>';
    }
}