<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\AlbumsEditView;

#[Route(method:'GET', path:"/next")]
class AlbumsEditController extends BaseController
{
    public function index()
    {
        $view = new AlbumsEditView();
        $this->render($view, []);
    }
}
