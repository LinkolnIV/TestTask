<?php

namespace App\View\Albums;

use App\Core\View\BaseViewInterface;

class AlbumsListView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo $this->makeTableWIthCOntent($data);
    }

    private function makeTableWIthCOntent(array $data):string
    {
        $tableHead="
        <table class='table'>
            <thead>
          <tr>
            <th scope='col'>№</th>
            <th scope='col'>Название</th>
            <th scope='col'>Описание</th>
            <th scope='col'>Логотип Альбома</th>
            <th scope='col' colspan='2'>Действия</th>
          </tr>
        </thead>
        <tbody>";

        $row ='';

        foreach($data['albums'] as $item){
            $row.= "<tr>
                    <th scope='row'>{$item['id']}</th>
                    <td><a href='/albums-show?album={$item['id']}'>{$item['name']}</a></td>
                    <td>{$item['description']}</td>
                    <td><img src='{$item['logo']}' style='width:100px'/></td>
                    <td><a href='/albums-edit?album={$item['id']}'>Редактировать</a></td>
                    <td><a href='/albums-remove' data-value='{$item['id']}' class='remove-album'>Удалить</a></td>
                </tr>";
        }

        return  $tableHead.$row."</tbody></table>";
    }
}
