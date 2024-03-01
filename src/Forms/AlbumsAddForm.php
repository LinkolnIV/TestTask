<?php

namespace App\Forms;

class AlbumsAddForm
{

    public function ShowForm():void
    {
        echo sprintf('
            <form action="/albums-add" method="post">
                <div class="mb-3">
                  <label for="albumsName" class="form-label">Название альбома</label>
                  <input type="text" class="form-control" id="albumsName" name="name">
                </div>
                <div class="mb-3">
                  <label for="albumsDescription" class="form-label">Описание альбома</label>
                  <input type="text" class="form-control" id="albumsDescription" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>'
        ,[]);
    }
}