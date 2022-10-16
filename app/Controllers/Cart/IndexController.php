<?php

namespace App\Controllers\Cart;

use App\Controllers\Controller;

class IndexController extends Controller
{
    public static function index()
    {
        if (!empty($_SESSION['cart'])) {
            $items = $_SESSION['cart'];
            $sum = array();
            foreach($items as $item){
                $sum [] = $item['price']*$item['qty'];
            }
            $sum = array_sum($sum);
        }else {
        }
        $view = "/../cart/index.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }
}