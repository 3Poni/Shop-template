<?php

namespace App\Controllers\Api;

use App\Controllers\Controller;
use App\Models\Order;


class ApiController extends Controller
{
    /**
     *
     * The method 'send()' must be connected with a remote payment service
     * Current state of this method is not final
     *
     */
    public function send()
    {
        $db = new Order;
        if ($db->whereId($_GET['id'])) {
            $db->update('status', 'paid', $_GET['id']);
        } else {
            echo '500 Server ERROR <br>Something went wrong';
        }
    }

    public function result()
    {
        $database = new Order;
        $columns = array('id', 'status');
        $q_data = array($_POST['id'], $_POST['pay_status']);
        if (!$database->whereId($_POST['id'])) {
            http_response_code(400);
            echo json_encode(
                array('message' => 'Status NOT Updated')
            );
        } else {
            $database->update($columns, $q_data, $_POST['id']);
            http_response_code(201);
            echo json_encode(
                array('message' => 'Status Updated')
            );
        }
    }

}
