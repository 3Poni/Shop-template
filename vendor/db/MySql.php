<?php

namespace Vendor\DB;

use PDO;
use Vendor\DB\Contracts\IConnection;

class MySql implements IConnection
{
    public static PDO $pdo;

    public static function connect()
    {
        $pdo = new PDO('' . DBDRIVER . ':host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8', '' . DBUSER . '', '' . DBPASS . '', [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        return $pdo;
    }
}