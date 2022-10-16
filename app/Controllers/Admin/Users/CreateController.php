<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\Admin\BaseController;

class CreateController extends BaseController
{

    public static function create()
    {
        $view = "/../users/create.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';
    }

}