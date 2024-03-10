<?php

namespace App\Entity;

class PicturesEntity
{
    private int $id;
    private string $path;
    private ?string $description;
    private ?string $name;
    private ?int $sort;
    
    public function getId():int
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

    public function setDescription(?string $description):self
    {
        $this->description = $description;

        return $this;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $name):self
    {
        $this->name = $name;

        return $this;
    }

    public function getSort():?int
    {
        return $this->sort;
    }

    public function setSort(?int $sort):self
    {
        $this->sort = $sort;

        return $this;
    }
}
