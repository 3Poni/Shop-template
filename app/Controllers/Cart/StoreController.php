<?php

namespace app\Controllers\Cart;

use App\Controllers\Controller;

use App\Models\Item;

class StoreController extends Controller
{
        public static function store()
        {
            $id = $_POST['id'];
            $database = new Item;
            $item = $database->whereId($id);
            if (isset($_SESSION['cart'][$item[0][0]])) {
                $_SESSION['cart'][$item[0][0]]['qty'] += 1;
                header('Location: /cart');
            } else {
                $_SESSION['cart'][$item[0][0]] = [
                    'name' => $item[0][1],
                    'id' => $item[0][0],
                    'price' => $item[0][5],
                    'qty' => 1,
                ];
                header('Location: /cart');
            }
            $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
            header('Location: /cart');
        }
}