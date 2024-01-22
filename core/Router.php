<?php

class Router
{
    protected $routes=[
        "GET"=>[],
        "POST"=>[]
    ];  //routes.php data

    // public function register($routes){
    //     $this->routes = $routes;
    // }

    public static function load($filename){
        $router = new Router;
        require $filename;
        return $router;
    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }
    
    public function direct($uri, $method){
        
        if (array_key_exists($uri, $this->routes[$method])){

            $expData = $this->routes[$method][$uri]; 

            $this->callAction($expData[0], $expData[1]);
            }else {
                die("404 | Not Found");
            }
    }

    public function callAction($class, $uriName){
       $class = new $class;
       $class->$uriName(); 
    }
}