<?php

namespace Vendor\DB\Contracts;

interface IConnection
{
    public function select(string $query, array $params = []): ?array;
    public function query(string $query, $params = []): mixed;
}