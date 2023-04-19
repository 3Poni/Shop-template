<?php

namespace Vendor\DB;


class Model
{
    private Connection $db;
    private ImageManager $file_manager;
    private SelectBuilder $builder;

    public function __construct()
    {
        $this->db = new Connection();
        $this->file_manager = new ImageManager();
    }

    private static function getTableName(): string
    {
        return static::$table;
    }

    private function selector(): QuerySelect
    {
        $builder = new SelectBuilder(self::getTableName());
        return new QuerySelect($this->db, $builder);
    }

    public function get(): array
    {
        return $this->selector()->get();
    }

    function whereId($id)
    {
        return $this->selector()->where("id = '$id'")->get();
    }

    function where($param, $column): array
    {
        return $this->selector()->where("$column = '$param'")->get();
    }

    function search($column, $search): array
    {
        return $this->selector()->where($column)->like($search)->get();
    }

    function sortBy($column, $method): array
    {
        return $this->selector()->where($column)->orderBy($column, $method)->get();
    }

    function count($param, $column)
    {
        return $this->selector()->count()->where("$column = $param")->get();
    }

    public function add($columns, $q_data): bool
    {
        $this->selector()->insert($columns, $q_data)->execute();
        return true;
    }

    function update($columns, $q_data, $id): bool
    {
        $this->selector()->update($columns, $q_data)->where("id = '$id'")->execute();
        return true;
    }

    function delete($id)
    {
        $this->selector()->delete()->where("id = '$id'")->execute();
    }

    function storage($file): string
    {
        if ($file['name'] == null) {
            return 'default_img.jpg';
        } else {
            return $this->file_manager->store($file, IMAGES_PATH);  // Returns uniq $filename
        }
    }

    function del_image($image): void
    {
        $this->file_manager->delete($image, IMAGES_PATH);
    }

    function join($table, $pk, $fk)
    {
        return $this->selector()->join($table, $pk, $fk);
    }

    function joinWhere($table, $pk, $fk, $order_id)
    {
        return $this->selector()->joinWhere($table, $pk, $fk, $order_id);
    }

    function hasMany($columns, $q_data)
    {
        $this->selector()->insert($columns, $q_data);
        $this->selector()->insert($columns, $q_data);
        return $this->add($columns, $q_data);
    }

}