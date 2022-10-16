<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\BaseController;

class IndexController extends BaseController
{
    public static function index()
    {
        $view = "/../index.php";
        require_once __DIR__ . '/../../../resources/views/admin/layouts/layout.php';
    }
}