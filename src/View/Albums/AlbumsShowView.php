<?php

namespace App\View\Albums;

use App\Core\View\BaseViewInterface;

class AlbumsShowView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo $this->makeTableWIthCOntent($data);
    }

    public function makeTableWIthCOntent(array $data):string
    {

        $tableHead="
        <table class='table'>
            <thead>
          <tr>
            <th scope='col'>№</th>
            <th scope='col'>Картинка</th>
          </tr>
        </thead>
        <tbody>";

        $row ='';
        foreach($data['album'] as $item){
            $row.= "<tr>
                    <th scope='row'>{$item['idPictures']}</th>
                    <td><img src='{$item['path']}'/></td>
                </tr>";
        }
        return $tableHead.$row."</tbody></table>";
    }
}
