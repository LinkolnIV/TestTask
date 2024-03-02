<?php

namespace App\Factory;

class AlbumsAddFactory
{

    public function processing(array $data)
    {
        $name = $data['name'];
        $description = $data['description'];
        $logo = $data['logo'];
    }
}