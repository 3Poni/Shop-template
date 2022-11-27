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
//        var_dump($order[0]['user_id']);
        if ($_SESSION['user']['id'] == $order['user_id']) {
            $db_user = new User;
            $user_id = $order['user_id'];
            $user = $db_user->whereId($user_id)[0];
            $ids = explode(',', $order['items_ids']);
            $db_item = new Item;
            $items = array();
            foreach ($ids as $el) {
                $id = explode('_', $el)[0];
                $qty = explode('_', $el)[1];
                $array = $db_item->whereId($id)[0];
                $items[] = [
                    'id' => $array['id'],
                    'name' => $array['name'],
                    'description' => $array['description'],
                    'image' => $array['image'],
                    'price' => $array['price'],
                    'qty' => $qty,
                    'user' => $user['login'],
                ];
            }
            $view = "/../orders/show.php";
            require_once __DIR__ . '/../../../../resources/views/user/layouts/layout.php';
        }else echo 'Нельзя';

    }
}