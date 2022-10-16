<?php

namespace App\Controllers\Admin\Categories;

use App\Controllers\Admin\BaseController;
use App\Models\Category;

class EditController extends BaseController
{

    public static function edit()
    {
        $database = new Category;
        $category = $database->whereId($_GET['id']);
        $view = "/../categories/edit.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }
}