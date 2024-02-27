<?php

namespace App\Core\Db;

use PDO;
use App\config\Config;

class Connection
{
    private PDO $connect;

    public function __construct()
    {
        $config = new Config();
        $config = $config->getDbConfig();
        $this->connect = new PDO($config['dsn'], $config['username'], $config['password']);
    }

    public function getConnect(): PDO
    {
        return $this->connect;
    }

}
