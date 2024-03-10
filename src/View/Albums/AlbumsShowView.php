<?php

namespace App\View\Albums;

use App\Core\View\BaseViewInterface;

class AlbumsShowView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo "<div class='container'>
            <div class='row gy-5'>";
        if(count($data['album'])!=0){
            echo $this->makeTableWIthCOntent($data);
        }else{
            echo '<p class="d-flex justify-content-center">Данных нет,всё пропало!</p>';
        }
        echo "</div>
            </div>";
    }

    public function makeTableWIthCOntent(array $data):string
    {
        echo "<br><br>";
        $row = "";
        foreach($data['album'] as $item){
            $row.="
                <div class='card' style='width: 18rem;'>
                    <div class='modal fade' id='modal{$item['id']}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>{$item['name']}</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <img src='{$item['path']}' class='card-img-top'>
                                <h3>Описание:</h3>
                                <p class='card-text'>{$item['description']}</p>
                            </div>
                            <div class='modal-footer'>
                                <div class='w-100'>
                                    <div class='d-flex justify-content-between'>
                                        <button type='button' data-value='{$item['id']}' class='btn btn-secondary like'>pros +</button>
                                        <button type='button' class='btn btn-secondary dislike' data-value='{$item['id']}'>cros +</button>
                                    </div>
                                    <form method='post' class='comment m-3' action='/comments-add'>
                                        <div class='mb-3'>
                                            <label for='comment{$item['id']}' class='form-label'>Комментарий</label>
                                            <textarea class='form-control' name='comment' id='comment{$item['id']}'></textarea>
                                        </div>
                                        <input type='hidden' value='{$item['id']}' name='pictureId'>
                                        <button type='submit' class='btn btn-secondary comment-submit'>Отправить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-bs-toggle='modal' data-bs-target='#modal{$item['id']}' class='p-3'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$item['name']}</h5>
                        <hr class='bg-secondary'>
                        <div class='d-flex justify-content-center'>
                            <img src='{$item['path']}' class='card-img-top w-75'>
                        </div>
                        <hr class='bg-secondary'>
                        <p class='card-text'>{$item['description']}</p>
                        <div class='d-flex justify-content-around'>
                            <span class='badge bg-secondary'>pros {$item['CountLikes']}</span>
                            <span class='badge bg-secondary'>cros {$item['CountDislikes']}</span>
                            <span class='badge bg-secondary'>comm {$item['CountComments']}</span>
                        </div>
                    </div>
                </div>

            </div>";
        }

        return $row;
    }
}
