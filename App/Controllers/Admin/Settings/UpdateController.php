<?php

namespace App\Controllers\Admin\Settings;

use App\Controllers\Admin\BaseController;

use App\Models\User;

class UpdateController extends BaseController
{

    public static function update()
    {
        if ($_SESSION['admin']['id'] == $_POST['id']) {
            $id = $_POST['id'];
            $database = new User;
            $columns = array('login','email');
            $q_data = array($_POST['login'], $_POST['email']);
            $users = $database->update($columns, $q_data, $id);
            header('Location: /admin/settings');
        }else echo 'Нельзя';
    }

}