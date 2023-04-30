<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\Admin\BaseController;
use App\Models\User;


class DeleteController extends BaseController
{

    public static function delete()
    {
        $database = new User;
        $users = $database->delete($_POST['id']);
        header("Location: /admin/items");
    }

}