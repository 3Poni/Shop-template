<?php

namespace Vendor\DB;

class QuerySelect
{
    protected Connection $db;
    protected SelectBuilder $builder;
    protected array $binds = [];

    public function __construct(Connection $db, SelectBuilder $builder)
    {
        $this->db = $db;
        $this->builder = $builder;
    }

    public function where(string $where)
    {
        $this->builder->addWhere($where);
        return $this;
    }

    public function like(string $search)
    {
        $this->builder->addLike($search);
        return $this;
    }

    public function orderBy(string $search, $method)
    {
        $this->builder->addOrderBy($search, $method);
        return $this;
    }

    public function count()
    {
        $this->builder->addCount();
        return $this;
    }

    public function limit(int $shift, ?int $cnt = null)
    {
        $this->builder->limit($shift . (($cnt !== null) ? ",$cnt" : ''));
        return $this;
    }

    public function insert($columns, $values)
    {
        $this->builder->setAction('insert into');
        $this->builder->setOperator('');                     // Убрать FROM из запроса, по умолчанию задается
        $this->builder->setColumns($columns);
        $this->builder->setValues($values);
        foreach ($values as $value)
        {
            $this->binds[] = htmlspecialchars($value);
        }
        return $this;
    }

    public function update($columns, $values)
    {
        $this->builder->setAction('update');
        $this->builder->setOperator('');                      // Убрать FROM из запроса, по умолчанию задается
        $this->builder->setUpdateValues($columns);
        if(gettype($values) == 'array'){
            foreach ($values as $value)
            {
                $this->binds[] = htmlspecialchars($value);
            }
        }else {
            $this->binds[] = htmlspecialchars($values);
        }

        return $this;
    }

    public function delete()
    {
        $this->builder->setAction('delete');
        return $this;
    }

    public function columns($columns)
    {
        $this->builder->setColumns($columns);
        return $this;
    }

    public function get(): array
    {
        return $this->db->select($this->builder, $this->binds);
    }

    public function join($table, $pk, $fk)
    {
        $this->builder->addInnerJoin($table, $pk, $fk);
        return $this;
    }

    public function joinWhere($table, $pk, $fk, $id)
    {
        $this->builder->addInnerJoin($table, $pk, $fk);
        $this->builder->addWhere('order_id = ' . $id);
        return $this;
    }

    public function execute(): \PDOStatement
    {

        return $this->db->query($this->builder, $this->binds);
    }
}