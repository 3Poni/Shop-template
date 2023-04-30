<?php

namespace app\Controllers\Admin\Items;

use App\Controllers\Admin\BaseController;
use App\Models\Item;
use App\Requests\StoreRequest;
use Vendor\Validation\Validation;

class StoreController extends BaseController
{

    public static function store()
    {
        $fields = (array) new StoreRequest;
        $validation = new Validation();
        if (!empty($_POST)) {
            $validation->load($fields);
        }
        if ($validation->validate($fields)) {
            echo $validation;
        }else {
            $file = $_FILES['image'];
            $database = new Item;
            $filename = $database->storage($file);
            $columns = array('name', 'description', 'image', 'category_id', 'price');
            $q_data = array($_POST['name'], $_POST['desc'], $filename, $_POST['category'], $_POST['price']);
            $database->add($columns, $q_data);
            header('Location: /admin/items');
        }
    }

}