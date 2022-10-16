<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{

    public static function login()
    {
        $data = new User;
        $user = $data->where($_POST['login'] ,'login');
        if (!$user || !crypt($_POST['pass'], $user[0][2]) == $user[0][2]) {
            echo 'Логин или пароль введены неверно';
            die;
        } else {
            switch ($user[0][4]) {
                case 1:
                    $_SESSION['admin'] = $user;
                case 0:
                    $_SESSION['user'] = $user;
            }
        }
        header('Location: /login');
    }

    public static function index()
    {
        $view = "/../auth/login.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }

}