<?php

namespace App\Forms;

class PicturesAddForm
{
    public function __construct(private array $data){}

    public function ShowForm():void
    {
        echo'
            <form action="/pictures-add-action" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="pictureName" class="form-label">Название картинки</label>
                  <input type="text" class="form-control" id="pictureName" name="name">
                </div>
                <div class="mb-3">
                  <label for="pictureDescription" class="form-label">Описание картинки</label>
                  <textarea class="form-control" id="pictureDescription" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="picturePath" class="form-label">Картинка</label>
                    <input type="file" class="form-control" id="picturePath" name="picturePath" />
                </div>';

                echo '<div class="mb-3">
                    <select class="form-select" aria-label="Альбом" name="albumsId">';
                    $row="";
                    foreach($this->data['Albums'] as $item){
                        $row.="<option value='{$item["id"]}'>{$item["name"]}</option>";
                    }

                    echo $row.'
                        </select>
                    </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>';
    }
}