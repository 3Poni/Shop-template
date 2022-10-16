<?php

namespace Vendor\DB;

use PDO;

class Model
{
    public Connection $db;

    public function __construct()
    {
        $this->db = Connection::getInstance();
    }

    private static function getTableName(): string
    {
        return static::$table;
    }

    public function get(): array
    {
        $sql = "SELECT * FROM " . self::getTableName() . "";
        return $result = $this->db->select($sql);
    }

    public function add($columns, $q_data): void
    {
        $sql = "INSERT INTO " . self::getTableName() . " (";
        $q_column = array();                                // Массив полей для вставки
        foreach ($columns as $k => $v) {                        // Пробегаемся по столбцам таблицы
            $q_column[] = "`" . $v . "`";                        // Обертываем в кавычки
        }
        $data = array();                                // Массив значений для SQL
        $params = array();                              // Массив масок "?" для prepare
        foreach ($q_data as $el) {                        // Пробегаемся по вставляемым значениям
            $data[] = htmlspecialchars($el);            // Попытка защиты от XSS атак
            $params[] = "?";                            // Вставка масок "?" в SQL в нужном количестве
        }
        $sql .= join(", ", $q_column) . ") VALUES (";        // Дополняем запрос столбцами
        $sql .= join(", ", $params) . ")";                 // Дополняем запрос значениями
        $this->db->query($sql, $data);
    }

    function whereId($id)
    {

        $sql = "SELECT * FROM " . self::getTableName() . " WHERE id = " . $id ."";
        return $result = $this->db->select($sql);
    }

    function where($fk, $column)
    {
        $sql = "SELECT * FROM " . self::getTableName() . " WHERE " . $column . " = '$fk' ";
        return $result = $this->db->select($sql);
    }

    function search($column, $s)
    {
        $sql = "SELECT * FROM " . self::getTableName() . " WHERE " . $column . " LIKE '$s' ";
        return $result = $this->db->select($sql);
    }

    function sortBy($column, $method): array
    {
        $sql = "SELECT * FROM " . self::getTableName() . " ORDER BY " . $column . " " . $method;
        return $result = $this->db->select($sql);
    }

    function count($fk, $column): array
    {
        $sql = "SELECT COUNT(*) FROM " . self::getTableName() . " WHERE " . $column . " = " . $fk;
        return $result = $this->db->select($sql);
    }

    function update($columns, $q_data, $id): void // Проведи тест, доделай если нужно
    {
        $sql = "UPDATE " . self::getTableName() . " SET ";
        $data = array();
        $params = array();                                  //Массив полей для вставки
        foreach ($q_data as $el) {                        //Пробегаемся по столбцам
            $data[] = htmlspecialchars($el);                        //Обертываем в кавычки
            $params[] = "?";
        }
        $q_column = array();                                // Массив полей для вставки
        foreach ($columns as $k => $v) {                        // Пробегаемся по столбцам таблицы
            $q_column[] = "`$v` = $params[$k]";                        // Обертываем в кавычки
        }
        $sql .= join(", ", $q_column) . " WHERE id = '$id' ";
        $this->db->query($sql, $data);
    }

    function delete($id): void
    {
        $sql = "DELETE FROM " . self::getTableName() . " WHERE id = " . $id;
        $result = $this->db->query($sql);;
    }

    function storage($file): string
    {
        if ($file['name']) {
            $filename = $file['name'];
            $meme = explode('.', $filename);
            $unq = uniqid();
            $filename = $unq . '.' . $meme[count($meme) - 1];
            move_uploaded_file($file['tmp_name'], 'storage/images/' . $filename);
            return $filename;
        } else {
            $filename = 'default_img.jpg';
            return $filename;
        }
    }

    function del_image($image): void
    {
        $file_name = '/../storage/images/' . $image;
        $base_dir = realpath($_SERVER["DOCUMENT_ROOT"]);
        $file_delete = "$base_dir$file_name";   // путь к файлу
        if (file_exists($file_delete)) {
            unlink($file_delete);
        }
    }
}