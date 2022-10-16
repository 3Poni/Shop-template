<?php

namespace app\Controllers\Admin\Categories;

use App\Controllers\Admin\BaseController;

use app\Models\Category;

class StoreController extends BaseController
{

    public static function store()
    {
        if (!empty($_POST)) {
            $database = new Category;
            $columns = array('name');
            $q_data = array($_POST['name']);
            $database->add($columns, $q_data);
            $categories = $database->get();
            header('Location: /admin/categories');
        }
    }

}