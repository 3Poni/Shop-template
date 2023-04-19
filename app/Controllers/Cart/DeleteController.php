<?php

namespace app\Controllers\Cart;

use App\Controllers\Controller;
use App\Services\CartService;

class DeleteController extends Controller
{
    public static function delete()
    {
        $id = $_POST['id'];
        CartService::deleteSession($id);
    }
}