<?php

namespace App\View\Albums;

use App\Core\View\BaseViewInterface;

class AlbumsShowView implements BaseViewInterface
{
    public function content(array $data): void
    {   echo "<div class='container'>";
        echo "<div class='row gy-5'>";
        echo $this->makeTableWIthCOntent($data);
        echo "</div>";
        echo "</div>";
    }

    public function makeTableWIthCOntent(array $data):string
    {
        $row = "";
        foreach($data['album'] as $item){
            $row.="
                <div class='card' style='width: 18rem;'>
                    <img src='{$item['path']}' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$item['name']}</h5>
                        <p class='card-text'>{$item['description']}</p>
                        <p>Likes:count {number}</p>
                        <p>Comments:count{number}</p>
                    </div>
                </div>";
        }

        return $row;
    }
}
