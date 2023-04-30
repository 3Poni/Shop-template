<?php

namespace App\Controllers\Admin\Items;

use App\Controllers\Admin\BaseController;
use App\Models\Item;

class DeleteController extends BaseController
{

    public static function delete()
    {
        $database = new Item;
        $del_image = $database->del_image($_POST['image']);
        $items = $database->delete($_POST['id']);
        header("Location: /admin/items");
    }

}