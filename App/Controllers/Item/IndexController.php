<?php

namespace App\Controllers\Item;

use App\Controllers\Controller;
use App\Models\Item;
use Vendor\Pagination\Pag;

class IndexController extends Controller
{
    public static function index()
    {
        $database = new Item;
        $pagination = new Pag($database->get(), 9);
        $items = $pagination->paginated();
        $view = "/../items/index.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }
}