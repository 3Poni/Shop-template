<?php

namespace App\Controllers\Item;

use App\Models\Item;
use App\Controllers\Controller;
use Vendor\Pagination\Pag;

class SearchController extends Controller
{

    public static function index()
    {
        $column = 'name';
        $database = new Item;
        $pagination = new Pag($database->search($column, "%{$_GET['search']}%"), 9);
        $items = $pagination->paginated();
        $view = "/../items/search/index.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }

}