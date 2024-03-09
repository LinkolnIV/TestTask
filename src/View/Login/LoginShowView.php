<?php

namespace App\View\Login;

use App\Forms\LoginForm;
use App\Core\View\BaseViewInterface;

class LoginShowView implements BaseViewInterface
{
    public function content(array $data): void
    {
        $picturesForm = new LoginForm($data);
        $picturesForm->ShowForm();
    }
}