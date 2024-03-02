<?php

namespace App\View\Pictures;

use App\Core\View\BaseViewInterface;

class PicturesAddView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo 'picturesAdd';
    }
}
