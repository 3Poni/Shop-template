<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class BaseController extends Controller
{

    public function __construct()
    {
        if (!$_SESSION['admin']) {
            header('Location: /');
        }
    }

}