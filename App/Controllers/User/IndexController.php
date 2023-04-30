<?php

namespace App\Controllers\User;

use App\Controllers\User\BaseController;

class IndexController extends BaseController
{
    public static function index()
    {
        $view = "/../index.php";
        require_once __DIR__ . '/../../../resources/views/user/layouts/layout.php';
    }
}