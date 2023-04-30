<?php

namespace App\Controllers\User\Orders;

use App\Controllers\User\BaseController;
use App\Models\ItemsOrders;
use App\Models\Order;

class ShowController extends BaseController
{

    public static function show()
    {
        $order_id = $_GET['id'];
        $db_order = new Order;
        $order = $db_order->whereId($order_id)[0];
        if ($_SESSION['user']['id'] == $order['user_id']) {
            $items_orders = new ItemsOrders;
            $items = $items_orders->joinWhere('items', 'item_id', 'id', $order_id)->get();
            $view = "/../orders/show.php";
            require_once __DIR__ . '/../../../../resources/views/user/layouts/layout.php';
        }else echo 'Нельзя';

    }
}