<?php

namespace App\Entity;

class AlbumsPictures
{
  private int $idAlbums;
  private int $idPictures;

  public function getIdAlbums():int
  {
    return $this->idAlbums;
  }

  public function setIdAlbums(int $idAlbums)
  {
    $this->idAlbums = $idAlbums;

    return $this;
  }

  public function getIdPictures():int
  {
    return $this->idPictures;
  }

  public function setIdPictures(int $idPictures):self
  {
    $this->idPictures = $idPictures;

    return $this;
  }
}