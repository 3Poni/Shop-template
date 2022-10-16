<?php

namespace App\Controllers\Admin\Categories;

use App\Controllers\Admin\BaseController;

use App\Models\Category;

class DeleteController extends BaseController
{

    public static function delete()
    {
        $database = new Category;
        $categories = $database->delete($_POST['id']);
        header("Location: /admin/categories");
    }

}