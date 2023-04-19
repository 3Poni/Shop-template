<?php

namespace App\Controllers\Admin\Settings;

use App\Controllers\Admin\BaseController;
use App\Models\User;

class IndexController extends BaseController
{

    public static function index()
    {
        $database = new User;
        $admin = $database->whereId($_SESSION['admin']['id'])[0];
        $view = "/../settings/index.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';
    }

}