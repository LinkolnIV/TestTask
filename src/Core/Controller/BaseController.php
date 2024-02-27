<?php

namespace App\Core\Controller;

use App\Core\View\BaseViewInterface;

class BaseController
{
    public function redirect(string $url, int $code): void
    {
        header('Location: '.$url, response_code:$code);
    }

    public function render(BaseViewInterface $view, array $data): void
    {
        $view->content($data);
    }
}
