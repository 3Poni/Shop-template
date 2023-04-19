<?php

namespace App\Controllers\User\Orders;

use App\Controllers\User\BaseController;
use App\Services\FakePaymentService;

class PayController extends BaseController
    {
        public static function pay()
        {
            $order_id = $_GET['id'];
            FakePaymentService::makePayment($order_id);
            header('Location: /user/orders');
        }
    }