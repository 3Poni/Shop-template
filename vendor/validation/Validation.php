<?php

namespace Vendor\Validation;

class Validation
{

    private array $data = [];
    public string $errors = '';


    public function load($data)
    {
        foreach ($_POST as $k => $v) {
            if (array_key_exists($k, $data)) {
                $this->data[$k]['value'] = trim($v);
            }
        }
    }

    public function validate($fields)
    {
        foreach ($this->data as $k => $v) {
            if ($fields[$k]['required'] && empty($this->data[$k]['value'])) {
                $this->errors .= "<li>Вы не заполнили поле {$fields[$k]['field_name']}</li>";
            }
        }
        if (!empty($this->errors)) {
            return $this->errors;
        }
    }

    public function __toString(): string
    {
        return $this->errors;
    }


}