<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Core\Controller\BaseController;
use App\View\Login\LoginShowView;
use App\Entity\UsersEntity;
use App\Repository\UsersRepository;

class LoginController extends BaseController
{
    private UsersEntity $users;
    private UsersRepository $usersRepository;

    public function __construct()
    {
        $this->users = new UsersEntity();
        $this->usersRepository = new UsersRepository($this->users);

    }

    #[Route(method:'GET', path:"/login")]
    public function login()
    {
        $view = new LoginShowView();
        $this->render($view,[]);
    }

    #[Route(method:'POST', path:"/login-action")]
    public function loginProcessing()
    {
        $name = $_POST['email'];
        $password = $_POST['password'];
        $this->users->setName($name);
        $this->users->setPassword($password);
        $user = $this->usersRepository->UserLogin($this->users);

        if(count($user)!=0){
            $_SESSION['user'] = $user[0];
        }else{
            $_SESSION['user'] = null;
        }

        return $this->redirect("/",301);
    }

}