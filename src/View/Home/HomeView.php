<?php

namespace App\View\Home;

use App\Core\View\BaseViewInterface;

class HomeView implements BaseViewInterface
{
    public function content(array $data): void
    {
        echo '<div class="container">';
        echo '<h4>Реализация функционала альбомов:</h4>';
        echo '<p>Создайте страницу, на которой пользователь может просмотреть список всех альбомов. -/albums-list </p>';
        echo '<p>Реализуйте возможность создания нового альбома:</p>';
        echo '<p>Создайте форму, где пользователь может ввести название и описание нового альбома. - /albums-add </p> 
              <p>При отправке формы, новый альбом должен сохраняться в базе данных.(- нет ajax отправки)</p> ';
        echo '<p>Реализуйте страницу просмотра альбома: </p>';
        echo '<p>При клике на альбом, пользователь должен быть перенаправлен на страницу просмотра альбома. - /albums-show</p>';
        echo '<p>На странице должны отображаться все изображения в виде миниатюр, относящиеся к данному альбому.(миниатюры сделал как через css)
            <p>Под миниатюрами отобразите название фото, количество лайков/дизлайков, количество комментариев.</p>
            <p>При клике на миниатюру, откройте полноразмерное изображение в модальном окне:</p>
            <p>Создайте форму где пользователь может оставить комментарий к фото.</p>
            <p>Добавьте возможность поставить лайк/дизлайк, должна быть возможность сбросить либо 	изменить свое решение в рамках сессии пользователя. (авторизация + но разделение на роли -)</p>
            <p>Отобразите название, описание, лайки/дизлайки, комментарии.</p>';
        echo '<p>Реализуйте функционал добавления нового изображения в альбом: - /pictures-add </p>';
        echo '<p>Создайте форму, где пользователь может выбрать файл изображения, ввести его название и описание.</p>';
        echo '<p>Проверьте, что выбранный файл является изображением.(- проверка через mime тип)</p>';
        echo '<p>При отправке формы, новое изображение должно сохраняться в базе данных и быть 	привязано к текущему альбому.(- привязка по id,название картинки хешируется)</p>';
        echo '</div>';
    }
}