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
use App\View\Pictures\PicturesEditView;
use App\Services\ImgService;

class PicturesController extends BaseController
{
    private AlbumsRepository $AlbumsRepository;
    private PicturesRepository $PicturesRepository;
    private AlbumsPicturesRepository $AlbumsPictureRepository;
    private ImgService $img;

    public function __construct()
    {   
        $entity = new AlbumsEntity();
        $this->AlbumsRepository = new AlbumsRepository($entity);
        $entity = new PicturesEntity();
        $this->PicturesRepository = new PicturesRepository($entity);
        $entity = new AlbumsPictures();
        $this->AlbumsPictureRepository = new AlbumsPicturesRepository($entity);
        $this->img = new ImgService();
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
        $sort = $_POST['sort'];
        $description = $_POST['description'];
        $albumsId = $_POST['albumsId'];
        $pictureName = $_FILES['picturePath']['name'];
        $picturePath = $_FILES['picturePath']['full_path'];
        $pictureTmp = $_FILES['picturePath']['tmp_name'];
        $pictureType = $_FILES['picturePath']['type'];

        if(in_array($pictureType,['image/jpeg','image/png','image/svg+xml'])){
            
            $picture = explode(".",$pictureName);
            $pictureName = md5($picture[0]).".".$picture[1];

            if(move_uploaded_file($pictureTmp,'./pictures/'.$pictureName)){

                $id = $this->PicturesRepository->add(['path'=>'./pictures/'.$pictureName,'description'=>$description,'sort'=>$sort,'name'=>$name]);
                $albumFromDb = $this->AlbumsRepository->getAlbum($albumsId);

                if(!empty($id) && !empty($albumFromDb)){
                    $this->AlbumsPictureRepository->add($albumsId,$id);
                }
            }
        }

    }

    #[Route(method:'GET',path:'/pictures-edit')]
    public function editPicture()
    {
        $pictureId = $_GET['picture'];
        $picture = $this->PicturesRepository->findById($pictureId);
        $view = new PicturesEditView();

        $this->render($view,[
            "picture"=>$picture
        ]);
    }

    #[Route(method:'POST',path:'/pictures-edit-action')]
    public function editPictureProcessing()
    {
        print_r($_POST);
        $args =["pictureId"=>$_POST['pictureId'],"name"=>$_POST['name'],"description"=>$_POST['description'],'sort'=>$_POST['sort']];
        $this->PicturesRepository->updatePicture($args);
        $this->img->changeSize($_POST['picturePath'],$_POST['picturecropX'],$_POST['picturecropY'],$_POST['picturecropWidth'],$_POST['picturecropHeight']);
    }
}