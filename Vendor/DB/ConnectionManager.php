<?php

namespace Vendor\DB;

use PDO;

class ConnectionManager
{

    public static function connect(): PDO
    {
        $className = 'Vendor\DB\Drivers\\'. strtolower(DBDRIVER);
        return $className::getDriver();
    }

}