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

}
