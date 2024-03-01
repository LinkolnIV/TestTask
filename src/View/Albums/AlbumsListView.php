<?php

namespace App\View\Albums;

use App\Core\View\BaseViewInterface;

class AlbumsListView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo "albums list";
    }
}
