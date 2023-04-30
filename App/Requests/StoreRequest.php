<?php

namespace App\Requests;

class StoreRequest {

    public array $name = [
            'field_name' => 'Имя',
            'required' => 1,
        ];
    public array $desc = [
            'field_name' => 'Описание',
            'required' => 0,
        ];
    public array $price = [
            'field_name' => 'Цена',
            'required' => 1,
        ];
    public array $category = [
        'field_name' => 'Категория',
        'required' => 1,
    ];

}