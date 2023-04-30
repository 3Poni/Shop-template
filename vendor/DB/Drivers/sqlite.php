<?php

namespace Vendor\DB\Drivers;

use PDO;
use Vendor\DB\Contracts\IConnection;

class SQLite implements IConnection
{

    public static function getDriver(): PDO
    {
        return new PDO ("sqlite:" . DBPATH);
    }

}
