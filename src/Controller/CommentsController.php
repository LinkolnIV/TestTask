<?php

namespace App\Controller;

use App\Core\Controller\BaseController;
use App\Core\Router\Route;
use App\Entity\CommentsEntity;
use App\Repository\CommentsRepositorty;

class CommentsController extends BaseController
{
    private CommentsEntity $commentsEntity;
    private CommentsRepositorty $commentsRepositorty;

    public function __construct()
    {
        $this->commentsEntity = new CommentsEntity();
        $this->commentsRepositorty = new CommentsRepositorty($this->commentsEntity);
    }

    #[Route(method:"POST", path:"/comments-add")]
    public function commentAdd()
    {
        if(!is_null($_SESSION['user'])){
            print_r("add");
            $this->commentsEntity->setComment($_POST['comment']);
            $this->commentsEntity->setPictureId($_POST['pictureId']);
            $this->commentsEntity->setDate();
            $this->commentsRepositorty->commentAdd($this->commentsEntity,$_SESSION['user']);
        }
    }
}