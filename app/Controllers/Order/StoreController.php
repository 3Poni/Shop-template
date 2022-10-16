<?php

namespace app\Controllers\Order;

use App\Controllers\Controller;
use App\Models\Order;

class StoreController extends Controller {

        public static function store()
        {
            if (!empty($_POST)) {
                $database = new Order();
                $ids = array();
                foreach ($_POST as $k => $v){
                    $ids [] = $v;
                }
                $sum = $ids[(count($ids)-1)];
                unset($ids[(count($ids)-1)]);
                $data = implode(',' ,$ids);
                $user_id = '';
                $status = 'not paid';
                if(isset($_SESSION['admin'])) {
                    $user_id = $_SESSION['admin'][0]['id'];
                }else if(isset($_SESSION['user'])){
                    $user_id = $_SESSION['user'][0]['id'];
                }else {
                    header('Location: /login');
                    die;
                }
                $columns = array('user_id', 'items_ids', 'sum', 'status');
                $q_data = array($user_id, $data, $sum, $status);
                $database->add($columns, $q_data);
                unset($_SESSION['cart']);
                unset($_SESSION['cart.qty']);
                header('Location: /');
            }
        }

}