<?php

namespace App\Controllers\Admin\Categories;

use App\Controllers\Admin\BaseController;
use App\Models\Category;

class ShowController extends BaseController
{

    public static function show()
    {

        $database = new Category;
        $categories = $database->whereId($_GET['id'])[0];
        $view = "/../categories/show.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }
}