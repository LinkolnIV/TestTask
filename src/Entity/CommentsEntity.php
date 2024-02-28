<?php

namespace App\Entity;

use DateTime;

class Comments
{
  private int $id;
  private int $pictureId;
  private string $comment;
  private ?DateTime $date;

  public function getId()
  {
    return $this->id;
  }
  
  public function getPictureId()
  {
    return $this->pictureId;
  }

  public function setPictureId($pictureId)
  {
    $this->pictureId = $pictureId;

    return $this;
  }

  public function getComment()
  {
    return $this->comment;
  }

  public function setComment($comment)
  {
    $this->comment = $comment;

    return $this;
  }

  public function getDate():?DateTime
  {
    return $this->date;
  }

  public function setDate(?DateTime $date)
  {
    $this->date = $date;

    return $this;
  }
}
