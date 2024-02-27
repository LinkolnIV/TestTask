<?php

namespace App\Core\View;

interface BaseViewInterface
{
    public function content(array $data): void;
}
