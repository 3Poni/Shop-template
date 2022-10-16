<?php

namespace App\Controllers\Admin\Orders;

use App\Controllers\Admin\BaseController;
use App\Models\Order;

class IndexController extends BaseController
    {
        public static function index()
        {

            $database = new Order;
            $orders = $database->get();
            $view = "/../orders/index.php";
            require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

        }
    }