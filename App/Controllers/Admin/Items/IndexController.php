<?php

namespace App\Controllers\Admin\Items;

use App\Controllers\Admin\BaseController;
use App\Models\Item;

class IndexController extends BaseController
    {
        public static function index()
        {
            $database = new Item;
            $items = $database->get();
            $view = "/../items/index.php";
            require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';
        }
    }