<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\Albums\AlbumsAddView;

/**
 * Контроллер просмотра альбомов
 */
class AlbumsAddController extends BaseController
{
    private AlbumsAddView $view;
    
    public function __construct()
    {
        $this->view = new AlbumsAddView();
    }

    #[Route(method:'GET', path:"/albums-add")]
    public function index()
    {
        
        $this->render($this->view, []);
    }

    #[Route(method:'POST', path:'/albums-add')] 
    public function albumsAdd()
    {
        print_r($_POST);
        echo "<h1>test test</h1>";
    }

}