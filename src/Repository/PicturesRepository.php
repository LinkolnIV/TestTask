<?php

namespace App\Repository;

use App\Core\Db\BaseRepository;
use App\Entity\PicturesEntity;

class PicturesRepository extends BaseRepository
{
    public function __construct()
    {
        $entity = new PicturesEntity();
        parent::__construct($entity);
    }

    public function test(): array
    {
        $ex = $this->_connect->query("SELECT * FROM {$this->tableName}");
        $res = $ex->fetchAll();
        return $res;
    }

    /**
     * tmp solution
     *
     * @param array $field
     * @return void
     */
    public function add(array $field):void
    {
        
        $sql = "INSERT INTO {$this->tableName}(path,description) VALUES(:path,:description)";
        $req = $this->_connect->prepare($sql);
        $req->bindValue(':path',$field['path']);
        $req->bindValue(':description',$field['description']);
        $req->execute();
    }

    public function getPicture(string $path):array
    {
        $ex = $this->_connect->prepare("SELECT * FROM {$this->tableName} Where path = :path ");
        $ex->bindValue(":path",$path);
        $ex->execute();
        return $ex->fetchAll();
    }

}
