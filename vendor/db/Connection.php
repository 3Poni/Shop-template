<?php

namespace Vendor\DB;

use PDO;
use PDOStatement;
use Vendor\DB\Contracts\IConnection;

class Connection implements IConnection
{
    public static $instance;
    protected PDO $db;

    public static function getInstance(): static
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct()
    {
//        $this->db = new PDO('' . DBDRIVER . ':host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8', '' . DBUSER . '', '' . DBPASS . '');
        $this->db = new PDO ("sqlite:" . "database.sqlite" );
    }

    public function select(string $query, array $params = []): ?array
    {
        return $this->query($query, $params)->fetchAll();
    }

    public function query(string $query, $params = []): PDOStatement
    {
        $query = $this->db->prepare($query);
        $query->execute($params);
        return $query;
    }

    public function __call(string $query, array $params = [])
    {

    }
}