<?php

namespace App\Core\Db;

use App\Core\Db\Connection;
use PDO;

class BaseRepository
{
    protected PDO $_connect;
    public readonly string $tableName;
    protected object $entity;

    public function __construct(object $entity)
    {
        $this->entity = $entity;
        $this->_connect = (new Connection())->getConnect();
        $this->tableName = str_replace(['App','\\','Entity'], '', $entity::class);
    }

    public function findById(int $id): object
    {
        $ex = $this->_connect->prepare("SELECT * FROM {$this->tableName} WHERE id = :id");
        $ex->bindValue('id', $id, PDO::PARAM_INT);
        $ex->execute();
        $res = $ex->fetchObject($this->entity::class);
        return $res;
    }

    public function findAll(): array
    {
        $ex = $this->_connect->query("SELECT * FROM {$this->tableName}");
        $res = $ex->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}
