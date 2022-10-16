<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\Admin\BaseController;
use App\Models\User;

class IndexController extends BaseController
{

    public static function index()
    {

        $database = new User;
        $users = $database->get();
        $view = "/../users/index.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';

    }

}