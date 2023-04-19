<?php

namespace App\Services;

class CartService
{
    public static function makeSession($item)
    {
        if (isset($_SESSION['cart'][$item['id']])) {
            $_SESSION['cart'][$item['id']]['qty'] += 1;
            header('Location: /cart');
        } else {
            $_SESSION['cart'][$item['id']] = [
                'name' => $item['name'],
                'id' => $item['id'],
                'price' => $item['price'],
                'qty' => 1,
            ];
            header('Location: /cart');
        }
        $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
        header('Location: /cart');
    }

    public static function deleteSession($id)
    {
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
    public static function getSum($session)
    {
        if (!empty($_SESSION['cart'])) {
            $session = $_SESSION['cart'];
            $sum = array();
            foreach($session as $item){
                $sum [] = $item['price']*$item['qty'];
            }
            return array_sum($sum);
        }
    }

}