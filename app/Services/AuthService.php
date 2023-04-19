<?php

namespace App\Services;

use App\Models\User;
use Vendor\DB\Model;

class AuthService
{
   public static function checkToken()
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
   }
   public static function authenticate($user)
   {
       if (!$user || !crypt($_POST['pass'], $user[0]['id']) == $user[0]['id']) {
           echo 'Логин или пароль введены неверно';
           die;
       } else {
           switch ($user[0]['role_id']) {
               case 1:
                   $_SESSION['admin'] = $user[0];
                   break;
               case 0:
                   $_SESSION['user'] = $user[0];
                   break;
           }
       }
       header('Location: /login');
   }

   public static function addUser($login, $password)
   {
       $database = new User;
       $columns = array('login', 'password');
       $q_data = array($login, $password);
       $column = 'login';
       if($database->where($login, $column)) {
           echo 'Пользователь с таким логином уже существует';
       }else {
           $users = $database->add($columns, $q_data);
           header('Location: /login');
       }

   }

}