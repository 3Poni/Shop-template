<?php

namespace app\Controllers\Cart;

use App\Controllers\Controller;
use App\Models\Item;
use App\Services\CartService;


class StoreController extends Controller
{
        public static function store()
        {
            $id = $_POST['id'];
            $model = new Item;
            $item = $model->whereId($id);
            CartService::makeSession($item);
        }
}