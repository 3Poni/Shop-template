<?php

namespace App\Controllers\Item;

use App\Controllers\Controller;
use App\Models\Item;
use Vendor\Pagination\HtmlPag;
use Vendor\Pagination\Pag;

class SortController extends Controller
{
    
    public static function sort()
    {
        $column = $_GET['by'];
        $method = $_GET['method'];
        $database = new Item;
        $pagination = new Pag($database->sortBy($column, $method), 9, new HtmlPag());
        $items = $pagination->paginated();
        $view = "/../items/index.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }
}