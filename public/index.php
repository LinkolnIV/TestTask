<?php

require_once '../vendor/autoload.php';
require_once '../src/config/Routes.php';

use App\Core\Router\Router;

$router = new Router($routes);
$router->router();