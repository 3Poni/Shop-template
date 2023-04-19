<?php

namespace App\Controllers\Cart;

use App\Controllers\Controller;
use App\Services\CartService;

class IndexController extends Controller
{
    public static function index()
    {
        $items = $_SESSION['cart'];
        $sum = CartService::getSum($items);
        $view = "/../cart/index.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }
}