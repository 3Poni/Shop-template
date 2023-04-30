<?php

namespace App\Controllers\Admin\Items;

use App\Controllers\Admin\BaseController;
use App\Models\Category;

class CreateController extends BaseController
{

    public static function create()
    {
        $database = new Category();
        $categories = $database->get();
        $view = "/../items/create.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';
    }

}