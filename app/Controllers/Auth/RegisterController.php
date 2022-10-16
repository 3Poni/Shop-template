<?php

namespace app\Controllers\Auth;

use App\Controllers\Controller;
use app\Models\User;

class RegisterController extends Controller {

    public static function register() {
            $login = $_POST['login'];
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $database = new User;
            $columns = array('login', 'password');
            $q_data = array($login, $pass);
            $column = 'login';
            if($database->where($login, $column)) {
                echo 'Пользователь с таким логином уже существует';
            }else {
                $users = $database->add($columns, $q_data);
                header('Location: /login');
            }

        }
    public static function index() {
        $view = "/../auth/register.php";
        require_once __DIR__ . '/../../../resources/views/layout/mainlayout.php';
    }


}