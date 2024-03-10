<?php

namespace App\View\Pictures;

use App\Core\View\BaseViewInterface;
use App\Forms\PicturesEditForm;

class PicturesEditView implements BaseViewInterface
{
    public function content(array $data): void
    {
        $picturesForm = new PicturesEditForm($data);
        $picturesForm->ShowForm();
    }
}