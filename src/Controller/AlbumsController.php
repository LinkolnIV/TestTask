<?php

namespace App\Controller;

use App\Core\Router\Route;
use App\Repository\AlbumsRepository;
use App\Entity\AlbumsEntity;
use App\Core\Controller\BaseController;
use App\View\Albums\AlbumsAddView;
use App\View\Albums\AlbumsEditView;
use App\View\Albums\AlbumsListView;
use App\View\Albums\AlbumsShowView;

/**
 * Контроллер просмотра альбомов
 */
class AlbumsController extends BaseController
{
    private AlbumsAddView $view;
    private AlbumsRepository $albumsRepository;

    public function __construct()
    {
        $AlbumsEntity = new AlbumsEntity();
        $this->albumsRepository = new AlbumsRepository($AlbumsEntity);
        $this->view = new AlbumsAddView();
    }

    #[Route(method:'GET', path:"/albums-add")]
    public function addShowPage()
    {
        
        $this->render($this->view, []);
    }

    #[Route(method:'POST', path:'/albums-add-action')] 
    public function add()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        if(move_uploaded_file($_FILES['logo']['tmp_name'],'./albums/'.$_FILES['logo']['name'])){
            $this->albumsRepository->add(["name"=>$name,"description"=>$description,"logo"=>'./albums/'.$_FILES['logo']['name']]);
        }else{
            echo "<br> false";
        }
    }

    #[Route(method:'GET', path:"/albums-edit")]
    public function edit()
    {
        $view = new AlbumsEditView();
        $this->render($view, []);
    }

    #[Route(method:'GET', path:"/albums-list")]
    public function list()
    {   
        
        $view = new AlbumsListView();
        $this->render($view, [
            'albums'=>$this->albumsRepository->findAll(),
        ]);
    }

    #[Route(method:'GET', path:"/albums-show")]
    public function show()
    {   
        $album = $_GET['album'];
        $view = new AlbumsShowView();
        $this->render($view, [
            'album'=>$this->albumsRepository->getAlbumWithData($album),
        ]);
    }

}