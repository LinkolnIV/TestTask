<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\Albums\AlbumsEditView;

class AlbumsEditController extends BaseController
{
    #[Route(method:'GET', path:"/next")]
    public function index()
    {
        $view = new AlbumsEditView();
        $this->render($view, []);
    }
}
