<?php

namespace App\Repository;

use App\Core\Db\BaseRepository;
use PDO;
class AlbumsPicturesRepository extends BaseRepository
{
    public function add(int $idAlbums,int $idPictures)
    {
        $ex = $this->_connect->prepare("INSERT INTO {$this->tableName}(idAlbums,idPictures) VALUE(:idAlbums,:idPictures)");
        $ex->bindValue(":idAlbums",$idAlbums);
        $ex->bindValue(":idPictures",$idPictures);
        $ex->execute();
    }
}