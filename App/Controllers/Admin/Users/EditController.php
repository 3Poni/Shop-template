<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\Admin\BaseController;
use App\Models\User;

class EditController extends BaseController
{
    public static function edit()
    {

        $database = new User;
        $user = $database->whereId($_GET['id']);
        $view = "/../users/edit.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }

}