<?php

use App\Controller\HomeController;
use App\Controller\AlbumsController;
use App\Controller\PicturesController;
// use App\Controller\AlbumsEditController;
// use App\Controller\AlbumsShowController;
// use App\Controller\AlbumsListController;
// use App\Controller\AlbumsAddController;

$routes = [
    new HomeController(),
    new PicturesController(),
    // new AlbumsEditController(),
    new AlbumsController(),
    // new AlbumsListController(),
    // new AlbumsAddController()
];
