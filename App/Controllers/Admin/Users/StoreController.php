<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\Admin\BaseController;
use App\Models\User;

class StoreController extends BaseController
{

    public static function store()
    {
            $database = new User;
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $columns = array('login', 'password', 'email', 'role_id');
            $q_data = array($_POST['login'], $pass, $_POST['email'], $_POST['role_id']);
            $users = $database->add($columns, $q_data);
            header('Location: /admin/users');
    }

}