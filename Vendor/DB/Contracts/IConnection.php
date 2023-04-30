<?php

namespace Vendor\DB\Contracts;

use PDO;

interface IConnection
{
    public static function getDriver(): PDO;
}