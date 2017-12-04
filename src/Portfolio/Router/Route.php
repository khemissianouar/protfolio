<?php
namespace Portfolio\Router;
/**
 * Class Route
 * @package Portfolio\Router
 */
class Route{
    private $name;
    private $parameters;
    private $callback;

    public function __construct(string $name,callable $callback,array $parameters)
    {
        $this->callback=$callback;
        $this->name=$name;
        $this->parameters=$parameters;
    }

    /**
     * @return string
     */


    public function getName():string {
        return $this->name;

    }

    /**
     * @return callable
     */
    public function getCallback():callable{
        return $this->callback;
    }

    /**
     * Retrive
     * @return String[]
     */
    public function getParameters():array{
        return $this->parameters;
    }
}