<?php

namespace App\Repository;

use App\Core\Db\BaseRepository;
use App\Entity\LikesEntity;
use PDO;

class LikesRepository extends BaseRepository
{

    public function __construct()
    {
        $entity = new LikesEntity();
        parent::__construct($entity);
    }

    public function LikeAdd(LikesEntity $like):bool
    {
        $req = $this->_connect->prepare("SELECT value FROM {$this->tableName} WHERE userId = :userId and pictureId = :pictureId");
        $req->bindValue('userId',$like->getUserId(),PDO::PARAM_INT);
        $req->bindValue('pictureId',$like->getPictureId(),PDO::PARAM_INT);
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        if(isset($res[0]['value']) && !is_null($res[0]['value'])){

            $req = $this->_connect->prepare("DELETE FROM {$this->tableName} WHERE userId = :userId and pictureId = :pictureId");
            $req->bindValue("userId",$like->getUserId(),PDO::PARAM_INT);
            $req->bindValue("pictureId",$like->getPictureId(),PDO::PARAM_INT);

            return $req->execute();
        }

        $req = $this->_connect->prepare("INSERT INTO {$this->tableName}(userId,pictureId,value,date) VALUES(:userId,:pictureId,:value,:date)");
        $req->bindValue("userId",$like->getUserId(),PDO::PARAM_INT);
        $req->bindValue("pictureId",$like->getPictureId(),PDO::PARAM_INT);
        $req->bindValue('value',$like->getValue(),PDO::PARAM_INT);
        $req->bindValue('date',$like->getDate()->format('Y-m-d H:i:s'));

        return $req->execute();

    }

    
    public function DislikeAdd(LikesEntity $like):bool
    {
        $req = $this->_connect->prepare("SELECT value FROM {$this->tableName} WHERE userId = :userId and pictureId = :pictureId");
        $req->bindValue('userId',$like->getUserId(),PDO::PARAM_INT);
        $req->bindValue('pictureId',$like->getPictureId(),PDO::PARAM_INT);
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        if(isset($res[0]['value']) && !is_null($res[0]['value'])){

            $req = $this->_connect->prepare("DELETE FROM {$this->tableName} WHERE userId = :userId and pictureId = :pictureId");
            $req->bindValue("userId",$like->getUserId(),PDO::PARAM_INT);
            $req->bindValue("pictureId",$like->getPictureId(),PDO::PARAM_INT);

            return $req->execute();
        }

        $req = $this->_connect->prepare("INSERT INTO {$this->tableName}(userId,pictureId,value,date) VALUES(:userId,:pictureId,:value,:date)");
        $req->bindValue("userId",$like->getUserId(),PDO::PARAM_INT);
        $req->bindValue("pictureId",$like->getPictureId(),PDO::PARAM_INT);
        $req->bindValue('value',$like->getValue(),PDO::PARAM_INT);
        $req->bindValue('date',$like->getDate()->format('Y-m-d H:i:s'));

        return $req->execute();
    }
}