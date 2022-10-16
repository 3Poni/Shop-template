<?php

namespace app\Controllers\Cart;

use App\Controllers\Controller;

class DeleteController extends Controller
{
    public static function delete()
    {
        $id = $_POST['id'];
        if (isset($_SESSION['cart'][$id])) {
            if ($_SESSION['cart'][$id]['qty'] == 1) {
                unset($_SESSION['cart'][$id]);
                --$_SESSION['cart.qty'];
                echo $_SESSION['cart.qty'];
                header('Location: /cart');
            } elseif ($_SESSION['cart'][$id]['qty'] > 1) {
                --$_SESSION['cart'][$id]['qty'];
                --$_SESSION['cart.qty'];
                echo $_SESSION['cart.qty'];
                header('Location: /cart');
            }
        } else {
            echo "этого элемента нет в корзине";
        }
    }
}