<?php

namespace App\Core\Controller;

class BaseController
{
    public function redirect(string $url, int $code):void
    {
        header( 'Location: '.$url,response_code:$code);
    }
}