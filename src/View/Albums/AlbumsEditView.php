<?php

namespace App\View\Albums;

use App\Core\View\BaseViewInterface;

class AlbumsEditView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo "<div class='container'>
        <div class='row gy-5'>";
        echo $this->makeTableWIthCOntent($data);
        echo "</div>
        </div>";
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
            <th scope='col'>Сортировка</th>
            <th scope='col' colspan='2'>Действия</th>
          </tr>
        </thead>
        <tbody>";

        $row ='';

        foreach($data['album'] as $item){
            $row.= "<tr>
                    <th scope='row'>{$item['id']}</th>
                    <td><a href='/albums-show?album={$item['id']}'>{$item['name']}</a></td>
                    <td>{$item['description']}</td>
                    <td>{$item['sort']}</td>
                    <td><img src='{$item['logo']}'/></td>
                    <td><a href='/pictures-edit?picture={$item['id']}'>Редактировать</a></td>
                    <td><a href='/albums-remove'>Удалить</a></td>
                </tr>";
        }

        return  $tableHead.$row."</tbody></table>";
    }
}
