<?php

namespace App\Repository;

use App\Core\Db\BaseRepository;
use PDO;
class AlbumsRepository extends BaseRepository
{
    /**
     * tmp solution
     *
     * @param array $field
     * @return void
     */
    public function add(array $field):void
    {
        
        $sql = "INSERT INTO {$this->tableName}(name,description,logo) VALUES(:name,:description,:logo)";
        $req = $this->_connect->prepare($sql);
        $req->bindValue(':name',$field['name']);
        $req->bindValue(':description',$field['description']);
        $req->bindValue(':logo',$field['logo']);
        $req->execute();
    }

    /**
     * @deprecated 
     *
     * @return array
     */
    public function getAlbums():array
    {
        $sql = "SELECT * FROM testtask.Albums";
        $res = $this->_connect->query($sql,PDO::FETCH_ASSOC);
        return $res->fetchAll();
    }

    public function getAlbumWithData(int $albumId):array
    {
        
        $sql ="SELECT * FROM testtask.Albums a
            JOIN AlbumsPictures ap ON(a.id = ap.idAlbums)
            JOIN Pictures p ON(p.id = ap.idPictures)
            WHERE a.id =:id";
        $req = $this->_connect->prepare($sql);
        $req->bindValue(':id',$albumId,PDO::PARAM_INT);
        $req->execute();
        
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
