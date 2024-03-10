<?php

namespace App\Repository;

use App\Core\Db\BaseRepository;
use App\Entity\PicturesEntity;
use PDO;

class PicturesRepository extends BaseRepository
{
    public function __construct()
    {
        $entity = new PicturesEntity();
        parent::__construct($entity);
    }

    /**
     * tmp solution
     *
     * @param array $field
     * @return int
     */
    public function add(array $field):int
    {
        
        $sql = "INSERT INTO {$this->tableName}(path,description,sort,name) VALUES(:path,:description,:sort,:name)";
        $req = $this->_connect->prepare($sql);
        $req->bindValue('path',$field['path']);
        $req->bindValue('description',$field['description']);
        $req->bindValue('sort',$field['sort'],PDO::PARAM_INT);
        $req->bindValue('name',$field['name'],PDO::PARAM_STR);
        $req->execute();

        return $this->_connect->lastInsertId();
    }

    public function getPicture(string $path):array
    {
        $ex = $this->_connect->prepare("SELECT * FROM {$this->tableName} Where path = :path ");
        $ex->bindValue(":path",$path);
        $ex->execute();
        return $ex->fetchAll();
    }

    public function updatePicture(array $data):bool
    {
        $sql = "UPDATE {$this->tableName} set name = :name,description = :description, sort = :sort WHERE id = :pictureId";
        $req = $this->_connect->prepare($sql);
        $req->bindValue("name",$data['name'],PDO::PARAM_STR);
        $req->bindValue('description',$data['description'],PDO::PARAM_STR);
        $req->bindValue('pictureId',$data['pictureId'],PDO::PARAM_INT);
        $req->bindValue('sort',$data['sort'],PDO::PARAM_INT);
        return $req->execute();
    }
}
