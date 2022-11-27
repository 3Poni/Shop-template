<?php

namespace App\Controllers\User\Settings;

use App\Controllers\User\BaseController;
use App\Models\User;


class DeleteController extends BaseController
{

    public static function delete()

    {
        if ($_SESSION['user']['id'] == $_POST['id']){
            $database = new User;
            $users = $database->delete($_POST['id']);
            unset($_SESSION['user']);
            header('Location: /user/settings');
        }else echo 'Нельзя';

    }

}