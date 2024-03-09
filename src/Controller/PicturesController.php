<?php

namespace App\Controller;

use App\Core\Controller\BaseController;
use App\Core\Router\Route;
use App\View\Pictures\PicturesAddView;
use App\Entity\AlbumsEntity;
use App\Repository\AlbumsRepository;
use App\Entity\PicturesEntity;
use App\Repository\PicturesRepository;
use App\Entity\AlbumsPictures;
use App\Repository\AlbumsPicturesRepository;

class PicturesController extends BaseController
{
    private AlbumsRepository $AlbumsRepository;
    private PicturesRepository $PicturesRepository;
    private AlbumsPicturesRepository $AlbumsPictureRepository;

    public function __construct()
    {   
        $entity = new AlbumsEntity();
        $this->AlbumsRepository = new AlbumsRepository($entity);
        $entity = new PicturesEntity();
        $this->PicturesRepository = new PicturesRepository($entity);
        $entity = new AlbumsPictures();
        $this->AlbumsPictureRepository = new AlbumsPicturesRepository($entity);
    }

    #[Route(method:'GET',path:'/pictures-add')]
    public function ShowFrom()
    {
        $view = new PicturesAddView();
        $Albums = $this->AlbumsRepository->findAll();
        $this->render($view,[
            "Albums"=>$Albums
        ]);
    }

    /**
     * @todo Добавить вызов сервиса проверки типа картинки
     *
     * @return void
     */
    #[Route(method:'POST',path:'/pictures-add-action')]
    public function add()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $albumsId = $_POST['albumsId'];
        $pictureName = $_FILES['picturePath']['name'];
        $picturePath = $_FILES['picturePath']['full_path'];
        $pictureTmp = $_FILES['picturePath']['tmp_name'];
        $pictureType = $_FILES['picturePath']['type'];
        
        if(move_uploaded_file($pictureTmp,'./pictures/'.$pictureName)){
            $this->PicturesRepository->add(['path'=>$picturePath,'description'=>$description]);
            $PictureAfterAdd = $this->PicturesRepository->getPicture($picturePath);
            $albumFromDb = $this->AlbumsRepository->getAlbum($albumsId);
            // print_r($PictureAfterAdd);
            if(!empty($PictureAfterAdd) && !empty($albumFromDb)){
                $this->AlbumsPictureRepository->add($albumsId,$PictureAfterAdd[0]['id']);
            }
        }

    }

}