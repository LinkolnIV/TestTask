<?php

namespace App\Controller;
use App\Core\Router\Route;

#[Route(method:'GET',path:'/second')]
class SecondController
{

    public function index()
    {
        echo "index second";
    }

}