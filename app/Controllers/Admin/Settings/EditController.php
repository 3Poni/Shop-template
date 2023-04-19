<?php

namespace App\Controllers\Admin\Settings;

use App\Controllers\Admin\BaseController;
use App\Models\User;

class EditController extends BaseController
{
    public static function edit()
    {
        if ($_SESSION['admin']['id'] == $_GET['id']){
        $database = new User;
        $admin = $database->whereId($_GET['id'])[0];
        $view = "/../settings/edit.php";
        require_once __DIR__ . '/../../../../resources/views/admin/layouts/layout.php';
        }else echo 'Нельзя';

    }

}