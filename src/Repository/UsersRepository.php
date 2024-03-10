<?php

namespace App\Repository;

use App\Core\Db\BaseRepository;
use App\Entity\UsersEntity;
use PDO;

class UsersRepository extends BaseRepository
{
    public function __construct()
    {
        $entity = new UsersEntity();
        parent::__construct($entity);
    }

   public function UserLogin(UsersEntity $user):array
   {
        $req = $this->_connect->prepare("SELECT id,name,roles FROM {$this->tableName} WHERE name = :name and password = :password LIMIT 1");
        $req->bindValue("name",$user->getName(),PDO::PARAM_STR);
        $req->bindValue('password',$user->getPassword(),PDO::PARAM_STR);
        $req->execute();
        
        return $req->fetchAll(PDO::FETCH_ASSOC);
   }

   public function UserRegister(UsersEntity $user)
   {
    $req = $this->_connect->prepare("INSERT INTO {$this->tableName}(name,roles,password) VALUES(:name,:roles,:password)");
    $req->bindValue("name",$user->getName());
    $req->bindValue("roles",$user->getRoles());
    $req->bindValue("password",$user->getPassword());
    $req->execute();

   }
}