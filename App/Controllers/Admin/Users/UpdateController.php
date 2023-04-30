<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\Admin\BaseController;

use App\Models\User;

class UpdateController extends BaseController
{

    public static function update()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $database = new User;
            $columns = array('login', 'password' , 'email', 'role_id');
            $q_data = array($_POST['login'], $pass , $_POST['email'], $_POST['role_id']);
            $users = $database->update($columns, $q_data, $id);
            header('Location: /admin/users');
        }
    }

}