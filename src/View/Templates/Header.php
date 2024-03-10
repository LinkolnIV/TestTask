<?php

namespace App\View\Templates;

class Header
{
    public function header(): void
    {
        echo "<!DOCTYPE html>
                <head>
                    <title>TESTTask</title>
                    <link href='./assets/node_modules/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'/>
                </head>
            <body>
            <ul class='nav justify-content-end'>
                <li class='nav-item'>
                    <a class='nav-link link-dark' aria-current='page' href='/home'>Главная</a>
                </li>
                <div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Альбомы
                    </button>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='/albums-list'>Просмотр альбомов</a></li>
                        <li><a class='dropdown-item' href='/albums-add'>Добавить альбом</a></li>
                    </ul>
                </div>
                <div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Картинки
                    </button>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='/pictures-add'>Добавить картинку</a></li>
                    </ul>
                </div>";
        if(isset($_SESSION['user']) && !is_null($_SESSION['user'])){
            echo "<div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Пользователь
                    </button>
                    <ul class='dropdown-menu'>
                        <li class='nav-item'>{$_SESSION['user']['name']}</li>
                        <li class='nav-item'><a href='/logout'>Выход</a></li>
                    </ul>
                </div>";
        }else{
            echo "<div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Пользователь
                    </button>
                    <ul class='dropdown-menu'>
                        <li class='nav-item'>
                            <a class='nav-link' href='/login'>Вход</a>
                            <a class='nav-link' href='/register'>Регистрация</a>
                        </li>
                    </ul>
                </div>";
        }
        echo"</ul>";
    }
}
