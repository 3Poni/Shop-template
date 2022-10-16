<?php

namespace App\Controllers\Admin\Orders;

use App\Controllers\Admin\BaseController;
use App\Models\Order;


class DeleteController extends BaseController
{

    public static function delete()
    {
        $database = new Order;
        $database->delete($_POST['id']);
        header("Location: /admin");
    }

}