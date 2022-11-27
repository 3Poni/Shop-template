<?php

namespace App\Controllers\User\Settings;

use App\Controllers\User\BaseController;
use App\Models\User;

class IndexController extends BaseController
{

    public static function index()
    {

        $database = new User;
        $user = $database->whereId($_SESSION['user']['id'])[0];
        $view = "/../settings/index.php";
        require_once __DIR__ . '/../../../../resources/views/user/layouts/layout.php';

    }

}