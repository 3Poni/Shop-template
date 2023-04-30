<?php

namespace App\Controllers\Category;

use App\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;

class ShowController extends Controller
{

    public static function show()
    {
        $id = $_GET['id'];
        $db_item = new Item;
        $items = $db_item->where($id, 'category_id');
        $db_category = new Category;
        $category = $db_category->whereId($id)[0];
        $view = "/../categories/show.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }

}