<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{

    public static function login()
    {
        if (!isset($_POST['token']) || !isset($_SESSION['token'])){
            echo "Token not set!";
            header('Location: /login');
        }
        if($_POST['token'] == $_SESSION['token']){
            unset($_SESSION['token']);
        }else {
            exit('Invalid token');
        }

        $data = new User;
        $user = $data->where($_POST['login'],'login');
        if (!$user || !crypt($_POST['pass'], $user[0]['id']) == $user[0]['id']) {
            echo 'Логин или пароль введены неверно';
            die;
        } else {
            switch ($user[0]['role_id']) {
                case 1:
                    $_SESSION['admin'] = $user[0];
                case 0:
                    $_SESSION['user'] = $user[0];
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