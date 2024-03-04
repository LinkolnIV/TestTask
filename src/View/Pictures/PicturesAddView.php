<?php

namespace App\View\Pictures;

use App\Core\View\BaseViewInterface;
use App\Forms\PicturesAddForm;

class PicturesAddView implements BaseViewInterface
{
    public function content(array $data): void
    {
        $picturesForm = new PicturesAddForm($data);
        $picturesForm->ShowForm();        
    }
}
