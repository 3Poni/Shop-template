<?php

namespace App\Controllers;

use App\Models\Item;

class IndexController extends Controller
{
    public static function index()
    {
        $database = new Item;
        $items = $database->get();
        $view = "/../index.php";
        require_once __DIR__ . '/../../resources/views/layout/mainlayout.php';
    }
}
