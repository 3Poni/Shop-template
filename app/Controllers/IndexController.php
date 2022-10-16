<?php

namespace App\Controllers;

use App\Controllers\Controller;

class IndexController extends Controller
{
    public static function index()
    {
        $view = "/../index.php";
        require_once __DIR__ . '/../../resources/views/layout/mainlayout.php';
    }
}
