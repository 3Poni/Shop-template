<?php

namespace App\Services;

use App\Models\Order;

class FakePaymentService
{
    public static function makePayment($order_id)
    {
        $database = new Order;
        $database->update('status', 'paid', $order_id);
    }
}