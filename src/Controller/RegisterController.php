<?php

namespace App\Controller;

use App\Core\Controller\BaseController;
use App\Core\Router\Route;
use App\View\Register\RegisterView;
use App\Entity\UsersEntity;
use App\Repository\UsersRepository;

class RegisterController extends BaseController
{
    #[Route(method:"GET",path:"/register")]
    public function register()
    {
        $view = new RegisterView();
        $this->render($view,[]);
    }

    #[Route(method:"POST",path:"/register-processing")]
    public function registerProcessing()
    {
        $user = new UsersEntity();
        $UsersRepository = new UsersRepository($user);
        $user->setName($_POST['email']);
        $user->setPassword($_POST['password']);
        // print_r($_POST);
        $UsersRepository->UserRegister($user);
    }
}