<?php

namespace Vendor\DB;

use PDO;
use PDOStatement;

class Connection
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = ConnectionManager::connect();
    }

    public function select(string $query): ?array
    {
        return $this->pdo->query($query)->fetchAll();
    }

    public function query(string $query, $params = []): PDOStatement
    {
        $query = $this->pdo->prepare($query);
        $query->execute($params);
        return $query;
    }
}