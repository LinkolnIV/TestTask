<?php

namespace App\View;

use App\Core\View\BaseViewInterface;

class HomeView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo '
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/albums-list">Просмотр альбомов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Войти</a>
                </li>
            </ul>
        ';
    }
}
