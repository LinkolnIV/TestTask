<?php

namespace App\Core\Router;

use App\Core\Router\Route;

class Router
{
    public function __construct(private array $routes)
    {
    }

    public function router()
    {
        foreach($this->routes as $route) {
            $reflection = new \ReflectionClass($route);
            $methods = $reflection->getMethods();
            foreach($methods as $method){
                $attributesClass = $method->getAttributes(Route::class);
                if(!empty($attributesClass)){
                    $params = $attributesClass[0]->getArguments();
                    if ($params['method'] === $_SERVER['REQUEST_METHOD']) {
                        $flag = str_contains($_SERVER['REQUEST_URI'],$params['path']);
                        if ($flag) {
                            $action = $method->getName();
                            $route->$action();
                        }
                    }
                }
            }
        }
    }
}
