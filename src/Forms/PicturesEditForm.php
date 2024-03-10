<?php

namespace App\Forms;

class PicturesEditForm
{
    public function __construct(private array $data){}

    public function ShowForm():void
    {
        echo"<form action='/pictures-edit-action' method='post'>
                <div class='mb-3'>
                  <label for='pictureName' class='form-label'>Название картинки</label>
                  <input type='text' class='form-control' id='pictureName' name='name' value='{$this->data['picture']->getName()}'>
                </div>
                <div class='mb-3'>
                    <label for='pictureSort' class='form-label'>Уровень сортировки</label>
                    <input type='text' class='form-control' id='pictureSort' name='sort' value='{$this->data['picture']->getSort()}'>
                </div>
                <div class='mb-3'>
                  <label for='pictureDescription' class='form-label'>Описание картинки</label>
                  <textarea class='form-control' id='pictureDescription' name='description'>{$this->data['picture']->getDescription()}</textarea>
                </div>
                <input type='hidden' class='form-control' id='picturePath' name='picturePath' value='{$this->data['picture']->getPath()}' />
                <input type='hidden' value='{$this->data['picture']->getId()}' name='pictureId'/>
                <input type='hidden' value='' name='picturecropWidth'>
                <input type='hidden' value='' name='picturecropX'>
                <input type='hidden' value='' name='picturecropHeight'>
                <input type='hidden' value='' name='picturecropY'>
                <button type='submit' class='btn btn-primary picture-edit'>Сохранить</button>
            </form>
                <h3>Редактировать текущее изображение</h3>
                <img src='{$this->data['picture']->getPath()}' class='form-control w-25' id='picturecrop'/>
            ";
    }
}