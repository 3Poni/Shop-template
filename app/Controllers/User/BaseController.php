<?php

namespace App\Controllers\User;

use App\Controllers\Controller;

class BaseController extends Controller
{

    public function __construct()
    {
        if (!$_SESSION['user']) {
            header('Location: /');
        }
    }

}