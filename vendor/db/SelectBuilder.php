<?php

namespace Vendor\DB;

use Exception;

class SelectBuilder
{
    public string $table;
    protected string $action = 'SELECT';
    protected string $operator = 'FROM';
    protected string $function = "";
    protected string $values = "";
    protected string $columns = "";
    protected array $masks;
    protected array $fields = ['*'];
    protected array $addons = [
        'join' => null,
        'where' => null,
        'group_by' => null,
        'having' => null,
        'order_by' => null,
        'limit' => null,
        'like' => null,
    ];

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function fields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function addWhere(string $where)
    {
        $this->addons['where'] .= ' ' . $where;
        return $this;
    }

    public function addLike(string $where)
    {
        $this->addons['like'] .= " " . " '$where' ";
        return $this;
    }

    public function addOrderBy(string $where, $method)
    {
        $this->addons['order_by'] .= ' ' . $where . " " . $method;
        return $this;
    }

    public function addCount()
    {
        $this->fields = ["COUNT(*)"];
        return $this;
    }

    public function setAction(string $action)
    {
        $this->fields = [''];
        $this->action = strtoupper($action);
    }

    public function setColumns($columns)
    {
        $this->columns = "(" . implode(', ', $columns) . ")";
    }

    public function setOperator(string $operator)
    {
        $this->operator = strtoupper($operator);
    }

    public function setValues($values)
    {
        foreach($values as $mask) {
            $this->masks[] = "?";
        }
        $this->values = "VALUES (";
        $this->values .= join(", ", $this->masks) . ")";
    }

    public function setUpdateValues($columns)
    {
        if( gettype($columns) == 'array') {
            foreach($columns as $column) {
                $this->columns .=  "`$column` = " . "?, ";
            }
        }else {
            $this->columns = "`$columns` = " . "?, ";
        }

        $this->columns = "SET " . substr($this->columns, 0, -2) . " ";
    }

    public function __toString()
    {
        $activeCommands = [];
        foreach ($this->addons as $command => $setting) {
            if ($setting !== null) {
                $sqlKey = str_replace('_', ' ', strtoupper($command));
                $activeCommands[] = "$sqlKey $setting";
            }
        }
        $action = strtoupper($this->action);
        $fields = implode(', ', $this->fields);
        $addon = implode(' ', $activeCommands);
        return trim("$action {$this->function} $fields {$this->operator} {$this->table} {$this->columns} {$this->values} $addon");
    }

//    public function __call($name, $args){
//        if(!array_key_exists($name, $this->addons)){
//            throw new Exception('sql error unknown');
//        }
//
//        $this->addons[$name] = $args[0];
//        return $this;
//    }

}
