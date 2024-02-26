<?php

namespace App\Core\Router;

use Attribute;

#[Attribute(Attribute::TARGET_ALL)]
class Route
{
    public function __construct(
        private string $method,
        private string $path,
    )
    {}

}