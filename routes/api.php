<?php

use App\Models\Item;

class API {
    public static function Select(){
        $db = new Item;
        $data = $db->get();
        $items = array();
        foreach($data as $item){
            $items[$item[0]] = array (
                'id' => $item[0],
                'name' => $item[1],
                'category_id' => $item[3],
            );
        }
        return json_encode($items);
    }
}

$API = Api::Select();
echo $API;

