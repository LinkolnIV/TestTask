<?php

namespace App\Controller;

use App\Core\Controller\BaseController;
use App\Core\Router\Route;
use App\Entity\LikesEntity;
use App\Repository\LikesRepository;

class LikesController extends BaseController
{   
    private LikesEntity $LikesEntity;
    private LikesRepository $LikesRepository;

    public function __construct()
    {
        $this->LikesEntity = new LikesEntity();
        $this->LikesRepository = new LikesRepository($this->LikesEntity);
    }

    #[Route(method:"POST", path:"/like")]
    public function like()
    {
        if(!is_null($_SESSION['user'])){
            $this->LikesEntity->setUserId($_SESSION['user']['id']);
            $this->LikesEntity->setPictureId($_POST['pictureId']);
            $this->LikesEntity->setValue(1);
            $this->LikesEntity->setDate();
            $this->LikesRepository->LikeAdd($this->LikesEntity);
        }
    }
    
    #[Route(method:"POST",path:"/dislike")]
    public function dislike()
    {
        if(!is_null($_SESSION['user'])){
            $this->LikesEntity->setUserId($_SESSION['user']['id']);
            $this->LikesEntity->setPictureId($_POST['pictureId']);
            $this->LikesEntity->setValue(0);
            $this->LikesEntity->setDate();
            $this->LikesRepository->DislikeAdd($this->LikesEntity);
        }

    }
}