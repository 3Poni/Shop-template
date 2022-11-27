<?php

namespace Vendor\DB;

use PDO;
use PDOStatement;

class Connection
{
    protected PDO $pdo;

    public function __construct()
    {
        if (strtolower(DBDRIVER) == 'mysql') {
            $this->pdo = new PDO('' . DBDRIVER . ':host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8', '' . DBUSER . '',
                '' . DBPASS . '',
                [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
        } elseif (strtolower(DBDRIVER) == 'sqlite') {
            $this->pdo = new PDO ("sqlite:" . DBPATH);
        }
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