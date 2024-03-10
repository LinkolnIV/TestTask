<?php

namespace App\View\Templates;

class Footer
{
    public function footer(): void
    {
        echo "
                <footer>
                </footer>
                <script src='./assets/node_modules/jquery/dist/jquery.min.js'></script>
                <script src='./assets/node_modules/@popperjs/core/dist/umd/popper.min.js'></script>
                <script src='./assets/node_modules/bootstrap/dist/js/bootstrap.min.js'></script>
                <link href='./assets/node_modules/cropperjs/dist/cropper.min.css' rel='stylesheet'>
                <script src='./assets/node_modules/cropperjs/dist/cropper.min.js'> </script>
                <script src='./js/pictureEdit.js'></script>
                <script src='./js/script.js'></script>
            </body>
        </html>
        ";
    }
}
