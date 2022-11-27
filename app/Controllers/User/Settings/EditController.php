<?php

namespace App\Controllers\User\Settings;

use App\Controllers\User\BaseController;
use App\Models\User;

class EditController extends BaseController
{
    public static function edit()
    {
        if ($_SESSION['user']['id'] == $_GET['id']){
        $database = new User;
        $user = $database->whereId($_GET['id'])[0];
        $view = "/../settings/edit.php";
        require_once __DIR__ . '/../../../../resources/views/user/layouts/layout.php';
        }else echo 'Нельзя';

    }

}