<?php

namespace App\Entity;

use DateTime;

class LikesEntity
{
    private int $id;
    private int $userId;
    private int $pictureId;
    private bool $value;
    private ?DateTime $date;

    public function getId():int
    {
        return $this->id;
    }

    public function getUserId():int
    {
        return $this->userId;
    }

    public function setUserId(int $userId):self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getPictureId():int
    {
        return $this->pictureId;
    }

    public function setPictureId(int $pictureId):self
    {
        $this->pictureId = $pictureId;

        return $this;
    }

    public function getValue():bool
    {
        return $this->value;
    }

    public function setValue(bool $value):self
    {
        $this->value = $value;

        return $this;
    }

    public function getDate():?DateTime
    {
        return $this->date;
    }

    public function setDate(?DateTime $date = new DateTime('now')):self
    {
        $this->date = $date;

        return $this;
    }
}