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
        <body>";
    }
}
