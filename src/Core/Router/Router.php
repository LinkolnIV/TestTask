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
                        if ($params['path'] === $_SERVER['REQUEST_URI']) { //$_SERVER['PATH_INFO']
                            $action = $method->getName();
                            $route->$action();
                        }
                    }
                }
            }
        }
    }
}
