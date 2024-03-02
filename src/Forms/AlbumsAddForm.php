<?php

namespace App\Forms;

class AlbumsAddForm
{

    public function ShowForm():void
    {
        echo sprintf('
            <form action="/albums-add-action" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="albumsName" class="form-label">Название альбома</label>
                  <input type="text" class="form-control" id="albumsName" name="name">
                </div>
                <div class="mb-3">
                  <label for="albumsDescription" class="form-label">Описание альбома</label>
                  <textarea class="form-control" id="albumsDescription" name="description"></textarea>
                </div>
                <div class="mb-3">
                  <label for="albumsLogo" class="form-label">Логотип альбома</label>
                  <input type="file" class="form-control" id="albumsLogo" name="logo">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>'
        ,[]);
    }
}