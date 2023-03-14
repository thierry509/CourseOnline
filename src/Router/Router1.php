<?php
namespace Thierry\Course\Router;
class Router{
    /**
     * @var array
     */
    private $urlRoute = [];
    public function map(string $method, string $url, callable $calback, ?string $name = null){
        $this->urlRoute[] = [$method, $url, $calback, $name];
    }

    public function match(){
        $url = $_SERVER['REQUEST_URI'];

        foreach($this->urlRoute as $item){
            
            // if($item[1] === $url){
                var_dump($item);
            // }
        }
    }
    
}