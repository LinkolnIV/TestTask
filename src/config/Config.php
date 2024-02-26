<?php

namespace App\config;
/**
 * Файл конфигурации для подключения к БД
 */
class Config{

    public function getDbConfig():array
    {
        return [
            'dsn'=>'mysql:dbname=testtask;host=localhost', 
            'username'=>'testtask',
            'password'=>'123456789Igor',
        ];
    }

}
