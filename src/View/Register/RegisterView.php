<?php

namespace App\View\Register;

use App\Core\View\BaseViewInterface;
use App\Forms\RegisterForm;

class RegisterView implements BaseViewInterface
{
    public function content(array $data): void
    {
        $registerForm = new RegisterForm($data);
        $registerForm->ShowForm();
    }
}