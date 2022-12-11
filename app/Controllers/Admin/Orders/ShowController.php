<?php

namespace App\Controllers\Admin\Orders;

use App\Controllers\Admin\BaseController;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use App\Models\ItemsOrders;
use Exception;

class ShowController extends BaseController
{

    public static function show()
    {
        $order_id = $_GET['id'];
        $db_order = new Order;
        $order = $db_order->whereId($order_id)[0];
        $db_user = new User;
        $user = $db_user->whereId($order['user_id'])[0];
        $items_orders = new ItemsOrders;
        $items = $items_orders->joinWhere('items', 'item_id', 'id', $order_id)->get();

        $view = "/../orders/show.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }
}