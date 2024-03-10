<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\Home\HomeView;

class HomeController extends BaseController
{
    #[Route(method:'GET', path:"/home")]
    public function index()
    {
        $view = new HomeView();
        $this->render($view, []);
    }
}
