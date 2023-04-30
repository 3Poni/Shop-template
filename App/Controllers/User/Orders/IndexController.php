<?php

namespace App\Controllers\User\Orders;

use App\Controllers\User\BaseController;
use App\Models\Order;

class IndexController extends BaseController
    {
        public static function index()
        {
            $database = new Order;
            $orders = $database->where($_SESSION['user']['id'], 'user_id');
            $view = "/../orders/index.php";
            require_once __DIR__ . '/../../../../resources/views/user/layouts/layout.php';

        }
    }