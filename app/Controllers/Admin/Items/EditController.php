<?php

namespace App\Controllers\Admin\Items;

use App\Controllers\Admin\BaseController;
use App\Models\Category;
use App\Models\Item;


class EditController extends BaseController
{

    public static function edit()
    {
        $db_items = new Item;
        $item = $db_items->whereId($_GET['id']);
        $db_categories = new Category;
        $categories = $db_categories->get();
        $view = "/../items/edit.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }
}