<?php
namespace Thierry\Course\Router;

use AltoRouter;

class Router{
    private $router;
    public function __construct(){
        $this->router = new AltoRouter();
    }
    public function get(string $url, $view, ?string $name = null, ?string $type = 'php'){
        $this->router->map('GET', $url, $view, $name);
        // dd($this);
        return $this;
    }
    public function post(string $url, $view, ?string $name = null, ?string $type = 'php'){
        $this->router->map('POST', $url, $view, $name);
        // dd($this);
        return $this;
    }
    public function get_post(string $url, $view, ?string $name = null, ?string $type = 'php'){
        $this->router->map('POST|GET', $url, $view, $name);
        // dd($this);
        return $this;
    }
    public function url(string $name, array $param = []){
        return $this->router->generate($name, $param);

    }
    public function run(){
        // dd($this);
        $match = $this->router->match();
        // dd($match);
        if($match){
            // dd($match);
            [$className, $method] = $match['target'];
            // $param = $match['params'];
            // dd(class_exists($className));
            if(class_exists($className) && method_exists($className, $method)){
                $class = new $className();
                call_user_func([$class, $method], $match['params']);
                
            }
            else{
                echo "forbiden";
            }
            // require($match['target']['path']);
        }
        else{
            echo "error 404";
        }
        
    }

}