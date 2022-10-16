<?php

namespace app\Controllers\Admin\Categories;

use App\Controllers\Admin\BaseController;
use App\Models\Category;

class UpdateController extends BaseController
{

    public static function update()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $database = new Category;
            $columns = array('name');
            $q_data = array($_POST['name']);
            $database->update($columns, $q_data, $id);
            $categories = $database->get();
            header('Location: /admin/categories');
        }
    }

}