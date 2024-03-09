<?php

require_once '../vendor/autoload.php';
require_once '../src/config/Routes.php';

session_name("TestTask");
session_start();

use App\Core\Router\Router;
use App\View\Templates\Header;
use App\View\Templates\Footer;

$header = new Header();
$footer = new Footer();

$header->header();

$router = new Router($routes);
$router->router();

$footer->footer();