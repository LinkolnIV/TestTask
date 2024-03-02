<?php

namespace App\View\Templates;

class Header
{
    public function header(): void
    {
        echo "<!DOCTYPE html>
                <head>
                    <title>TEst</title>
                    <link href='assets/node_modules/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'/>
                    <script src='assets/node_modules/jquery/dist/jquery.min.js'></script>
                    <script src='assets/node_modules/bootstrap/dist/js/bootstrap.min.js'></script>
                </head>
            <body>
            <ul class='nav justify-content-end'>
            <li class='nav-item'>
                <a class='nav-link active' aria-current='page' href='/'>Главная</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='/albums-list'>Просмотр альбомов</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='/login'>Войти</a>
            </li>
        </ul>
        ";
    }
}
