<?php

use App\Controller\HomeController;
use App\Controller\AlbumsController;
use App\Controller\PicturesController;
use App\Controller\LoginController;
use App\Controller\RegisterController;
use App\Controller\CommentsController;
use App\Controller\LikesController;

$routes = [
    new HomeController(),
    new PicturesController(),
    new AlbumsController(),
    new LoginController(),
    new RegisterController(),
    new CommentsController(),
    new LikesController(),
];
