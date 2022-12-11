<?php

namespace app\Controllers\Order;

use App\Controllers\Controller;
use App\Models\ItemsOrders;
use App\Models\Order;

class StoreController extends Controller
{

    public static function store()
    {
        if (!empty($_POST)) {
            if (isset($_SESSION['admin'])) {
                $user_id = $_SESSION['admin']['id'];
            } else if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']['id'];
            } else {
                header('Location: /login');
                die;
            }
            $db_order = new Order();
            $columns = array('user_id', 'sum');
            $q_data = array($user_id, $_POST['sum']);
            $db_order->add($columns, $q_data);
            $q = new Order();
            $order_id = $q->get();
            foreach ($_POST as $k => $v) {
                if ($k != 'sum') {
                    $db_items_orders = new ItemsOrders();
                    $db_items_orders->add(['item_id', 'order_id', 'qty'], [$k, end($order_id)['id'], $v]);
                }
            }
            unset($_SESSION['cart']);
            unset($_SESSION['cart.qty']);
            header('Location: /');
        }
    }

}