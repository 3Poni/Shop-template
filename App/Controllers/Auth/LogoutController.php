<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class LogoutController extends Controller
{

    public static function logout()
    {
        unset($_SESSION['admin']);
        unset($_SESSION['user']);
        header("Location: /");
    }

}