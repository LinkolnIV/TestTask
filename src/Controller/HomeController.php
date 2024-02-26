<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;

#[Route(method:'GET',path:"/")]
class HomeController extends BaseController
{

    public function index()
    {
        $this->redirect('/second',302);
    }
}