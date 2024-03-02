<?php

namespace App\Controller;

use App\Core\Controller\BaseController;
use App\Core\Router\Route;
use App\View\Pictures\PicturesAddView;
class PicturesController extends BaseController
{
    #[Route(method:'GET',path:'/pictures-add')]
    public function add()
    {
        echo "pictures add controller";
    }

}