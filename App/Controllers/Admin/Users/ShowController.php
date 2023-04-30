<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\Admin\BaseController;
use App\Models\User;

class ShowController extends BaseController
{

    public static function show()
    {

        $database = new User;
        $user = $database->whereId($_GET['id'])[0];
        $view = "/../users/show.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }
}