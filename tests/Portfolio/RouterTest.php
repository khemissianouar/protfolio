<?php
namespace Tests\Portfolio;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;
use Portfolio\Router;
class php extends TestCase {
    /**
     * @var Router
     */
    private $router;

  public function setUp()
    {
        $this->router = new Router();
    }
public function testGetMethod(){
    $request = new ServerRequest('GET','/blog');
    $this->router->get('/blogaze',function(){return 'hello';},'blog');
    $router=$this->router->match($request);
    $this->assertEquals('blog',$router->getName());
    $this->assertEquals('hello',call_user_func_array($router->getCallback(),[$request]));

}
    public function testGetMethodIfURLDoesNotExists(){
        $request = new ServerRequest('GET','/blog');
        $this->router->get('/blog',function(){return 'hello';},'blog');
        $router=$this->router->match($request);
        $this->assertEquals('null',$router->getName());

    }
    public function testGetMethodWithPrameters(){
        $request = new ServerRequest('GET','/blog/mon-slug_8');
        $this->router->get('/blog',function(){return 'aezez';},'posts');
        $this->router->get('/blog/{slug:[a-z0-9\-]+}-{id:/d+}',function(){return 'hello';},'post.show');
        $router=$this->router->match($request);
        $this->assertEquals('post.show',$router->getName());
        $this->assertEquals('hello',call_user_func_array($router->getCallback(),[$request]));
        $this->assertEquals(['slug'=>'mon-slug','id'=> 8],$router->getParameters());
        //Test invalid Url
        $router =$this->router->match(new ServerRequest('GET','/blog/mon_slug-8'));
        $this->assertEquals(null, $router);
    }
    public function testGenerateUri(){
        $this->router->get('/blog',function(){return 'aezez';},'posts');
        $this->router->get('/blog/{slug:[a-z0-9\-]+}-{id:/d+}',function(){return 'hello';},'post.show');
       $uri=$this->router->generateUri('post.show',['slug'=>'mon-article','id'=>18]);
       $this->assertEquals('blog/mon-article-18',$uri);
    }

}