<?php

namespace App\Entity;

class UsersEntity
{

    private int $id;
    private string $roles ="User";
    private string $password;
    private string $name;

    public function setId(int $id):self
    {
        $this->id = $id;

        return $this;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getRoles():string
    {
        return $this->roles;
    }

    public function setRoles(string $roles):self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword():string
    {
        return $this->password;
    }

    public function setPassword(string $password):self
    {
        $this->password = md5($password,false);

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
}