<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;
use App\Services\AuthService;

class LoginController extends Controller
{

    public static function login()
    {
        AuthService::checkToken();
        $data = new User;
        $user = $data->where($_POST['login'],'login');
        AuthService::authenticate($user);
    }

    public static function index()
    {
        $view = "/../auth/login.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }

}