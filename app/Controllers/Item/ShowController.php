<?php

namespace App\Controllers\Item;

use App\Controllers\Controller;
use App\Models\Item;

class ShowController extends Controller
{
    public static function show()
    {
        $database = new Item;
        $items = $database->whereId($_GET['id']);
        $view = "/../items/show.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }
}