<?php

namespace App\View\Albums;

use App\Core\View\BaseViewInterface;
use App\Forms\AlbumsAddForm;
class AlbumsAddView implements BaseViewInterface
{
    public function content(array $data): void
    {
        $albumsForm = new AlbumsAddForm($data);
        $albumsForm->ShowForm();
    }
}
