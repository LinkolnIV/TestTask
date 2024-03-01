<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\HomeView;

class HomeController extends BaseController
{
    #[Route(method:'GET', path:"/")]
    public function index()
    {
        $view = new HomeView();
        $this->render($view, []);
    }
}
