<?php

namespace App\Core\Router;
use App\Core\Router\Route;

class Router
{
    public function __construct(private array $routes){}

    public function router():mixed {
    
        foreach($this->routes as $route) {
    
            $reflection = new \ReflectionClass($route);
            $attributes = $reflection->getAttributes(Route::class);
            $params = $attributes[0]->getArguments();
            
            if ($params['method'] === $_SERVER['REQUEST_METHOD']) {
                if ($params['path'] === $_SERVER['REQUEST_URI']) {
                    return (new $route)->index();
                 }
            }
        }
    }
}