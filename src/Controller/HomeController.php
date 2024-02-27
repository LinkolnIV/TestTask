<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\HomeView;

#[Route(method:'GET', path:"/")]
class HomeController extends BaseController
{
    public function index()
    {
        $view = new HomeView();
        $this->render($view, []);
    }
}
