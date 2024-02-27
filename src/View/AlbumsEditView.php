<?php

namespace App\View;

use App\Core\View\BaseViewInterface;

class AlbumsEditView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo "albums";
    }
}
