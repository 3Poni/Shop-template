<?php

namespace App\Controllers\Category;

use App\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;

class IndexController extends Controller
{

    public static function index()
    {
        $db_item = new Item;
        $items = $db_item->get();
        $db_category = new Category;
        $categories = $db_category->get();
        $view = "/../categories/index.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }

}