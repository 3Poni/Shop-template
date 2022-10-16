<?php

namespace App\Controllers\User\Settings;

use App\Controllers\User\BaseController;

use App\Models\User;

class UpdateController extends BaseController
{

    public static function update()
    {
        if ($_SESSION['user'][0]['id'] == $_POST['id']) {
            $id = $_POST['id'];
            $database = new User;
            $columns = array('login','email');
            $q_data = array($_POST['login'], $_POST['email']);
            $users = $database->update($columns, $q_data, $id);
            header('Location: /user/settings');
        }else echo 'Нельзя';
    }

}