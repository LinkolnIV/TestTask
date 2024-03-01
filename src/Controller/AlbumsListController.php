<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\Albums\AlbumsListView;

/**
 * Контроллер просмотра альбомов
 */
class AlbumsListController extends BaseController
{
    #[Route(method:'GET', path:"/albums-list")]
    public function index()
    {
        $view = new AlbumsListView();
        $this->render($view, []);
    }
}