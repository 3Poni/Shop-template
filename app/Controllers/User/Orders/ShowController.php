<?php

namespace App\Controllers\User\Orders;

use App\Controllers\User\BaseController;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;

class ShowController extends BaseController
{

    public static function show()
    {
        $order_id = $_GET['id'];
        $db_order = new Order;
        $order = $db_order->whereId($order_id)[0];
        if ($_SESSION['user'][0]['id'] == $order['user_id']) {
            $db_user = new User;
            $user_id = $order['user_id'];
            $user = $db_user->whereId($user_id);
            $ids = explode(',', $order[2]);
            $db_item = new Item;
            $items = array();
            foreach ($ids as $el) {
                $id = explode('_', $el)[0];
                $qty = explode('_', $el)[1];
                $array = $db_item->whereId($id);
                $items[] = [
                    'id' => $array[0]['id'],
                    'name' => $array[0]['name'],
                    'description' => $array[0]['description'],
                    'image' => $array[0]['image'],
                    'price' => $array[0]['price'],
                    'qty' => $qty,
                    'user' => $user[0]['login'],
                ];
            }
            $view = "/../orders/show.php";
            require_once __DIR__ . '/../../../../resources/views/user/layouts/layout.php';
        }else echo 'Нельзя';

    }
}