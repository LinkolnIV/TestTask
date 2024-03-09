<?php

use App\Controller\HomeController;
use App\Controller\AlbumsController;
use App\Controller\PicturesController;
use App\Controller\LoginController;

$routes = [
    new HomeController(),
    new PicturesController(),
    new AlbumsController(),
    new LoginController(),
];
