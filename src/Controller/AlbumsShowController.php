<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\Albums\AlbumsShowView;

/**
 * Контроллер просмотра альбома
 */

class AlbumsShowController extends BaseController
{
    #[Route(method:'GET', path:"/albums-show")]
    public function index()
    {
        $view = new AlbumsShowView();
        $this->render($view, []);
    }
}