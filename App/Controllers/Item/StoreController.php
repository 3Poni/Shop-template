<?php

namespace app\Controllers\Item;

use App\Controllers\Controller;

use App\Models\Item;

class StoreController extends Controller
{
        public static function store()
        {
            $id = $_POST['id'];
            $database = new Item;
            $item = $database->whereId($id)[0];
            if (isset($_SESSION['cart'][$item['id']])) {
                $_SESSION['cart'][$item['id']]['qty'] += 1;
            } else {
                $_SESSION['cart'][$item['id']] = [
                    'name' => $item['name'],
                    'id' => $item['id'],
                    'price' => $item['price'],
                    'qty' => 1,
                ];
            }
            $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
            echo $_SESSION['cart.qty'];
        }
}