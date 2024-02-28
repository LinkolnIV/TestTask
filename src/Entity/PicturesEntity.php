<?php

namespace App\Entity;

class PicturesEntity
{
    private int $id;
    private string $path;
    private ?string $description;

    public function getId()
    {
        return $this->id;
    }

    public function getPath():string
    {
        return $this->path;
    }

    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    public function getDescription():?string
    {
        return $this->description;
    }

    public function setDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }
}
