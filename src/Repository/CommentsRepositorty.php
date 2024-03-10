<?php

namespace App\Repository;

use App\Core\Db\BaseRepository;
use App\Entity\CommentsEntity;
use PDO;

class CommentsRepositorty extends BaseRepository
{

    public function __construct()
    {
        $entity = new CommentsEntity();
        parent::__construct($entity);
    }

    public function commentAdd(CommentsEntity $comment,array $user):bool
    {
        $req = $this->_connect->prepare("INSERT INTO {$this->tableName}(userid,pictureId,comment,date) VALUES(:userid,:pictureId,:comment,:date)");
        $req->bindValue('userid',$user['id'],PDO::PARAM_INT);
        $req->bindValue('pictureId',$comment->getPictureId(),PDO::PARAM_INT);
        $req->bindValue('comment',$comment->getComment(),PDO::PARAM_STR);
        $req->bindValue('date',$comment->getDate()->format('Y-m-d H:i:s'));

        return $req->execute();
    }
}