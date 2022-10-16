<?php

namespace app\Controllers\Admin\Categories;

use App\Controllers\Admin\BaseController;

use App\Models\Category;

class IndexController extends BaseController
    {
        public static function index()
        {
            $database = new Category;
            $categories = $database->get();
            $view = "/../categories/index.php";
            require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';
        }
    }