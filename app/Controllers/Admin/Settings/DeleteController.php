<?php

namespace App\Controllers\Admin\Settings;

use App\Controllers\Admin\BaseController;
use App\Models\User;


class DeleteController extends BaseController
{

    public static function delete()

    {
        if ($_SESSION['admin']['id'] == $_POST['id']){
            $database = new User;
            $users = $database->delete($_POST['id']);
            unset($_SESSION['admin']);
            header('Location: /user/settings');
        }else echo 'Нельзя';

    }

}