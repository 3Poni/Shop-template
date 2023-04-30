<?php

namespace App\Controllers\Admin\Categories;

use App\Controllers\Admin\BaseController;

class CreateController extends BaseController
{

    public static function create()
    {
        $view = "/../categories/create.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';
    }

}