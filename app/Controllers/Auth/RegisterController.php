<?php

namespace app\Controllers\Auth;

use App\Controllers\Controller;
use App\Services\AuthService;

class RegisterController extends Controller
{

    public static function register()
    {
        $login = $_POST['login'];
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        AuthService::addUser($login, $password);
    }

    public static function index()
    {
        $view = "/../auth/register.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }


}