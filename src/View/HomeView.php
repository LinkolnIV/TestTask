<?php

namespace App\View;

use App\Core\View\BaseViewInterface;

class HomeView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo "content 123";
    }
}
