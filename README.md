# TestTask
Tестовоt задание "Альбомы"

## Миграция БД
Дамп БД в src/migrations (формат sql)
Имя пользователя и пароль src/config/Config.php
```php
        'dsn' => 'mysql:dbname=testtask;host=localhost',
        'username' => 'testtask',
        'password' => '123456789Igor',
```
## Зависимости
В корне проекта 
```bash
    composer instal
```
Зависимости для фронта в /public/assets

```bash
    npm i
```
## Запуск с использованием dev сервера
Стандартный дев сервер запускать в корне /public
php -S 127.0.0.1:9000

## Результат
Список альбомов
![Список альбомов !](readme/albums-list.png)

Содержимое альбома
![Содержимое альбома !](readme/album-show.png)
Редактирование альбома
![Редактирование альбома !](readme/albums-edit.png)
Добавление картинки
![Добавление картинки !](readme/pictures-add.png)
Редактирование картинки
![Редактирование картинки!](readme/pictures-edit.png)