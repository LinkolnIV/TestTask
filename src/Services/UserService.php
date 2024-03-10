<?php

namespace App\Services;

use App\Entity\UsersEntity;

class UserService
{
    public function __construct(private array $data)
    {
    }
    
    public function getUser():?UsersEntity
    {
        $entity = new UsersEntity();
        $entity->setId($this->data['id']);
        $entity->setName($this->data['name']);
        $entity->setRoles($this->data['roles']);

        return $entity;
    }
}
