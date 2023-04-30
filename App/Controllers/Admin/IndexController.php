<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemsOrders;
use App\Models\User;

class IndexController extends BaseController
{
    public static function index()
    {
        $items = new Item;
        $categories = new Category;
        $users = new User;
        $orders = new ItemsOrders;
        $countItems = count($items->get());
        $countCategories = count($categories->get());
        $countUsers = count($users->get());
        $countOrders = count($orders->get());

        $view = "/../index.php";
        require_once __DIR__ . '/../../../resources/views/admin/layouts/layout.php';
    }
}