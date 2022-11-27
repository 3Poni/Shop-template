<?php

namespace App\Controllers\Admin\Items;

use App\Controllers\Admin\BaseController;
use App\Models\Item;
use App\Models\Category;

class ShowController extends BaseController {

    public static function show() {

        $db_item = new Item;
        $item = $db_item->whereId($_GET['id'])[0];
        $id = $item['category_id']; // id Category
        $db_category = new Category;
        $category = $db_category->whereId($id)[0];
        $view = "/../items/show.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }
}