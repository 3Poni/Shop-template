<?php

namespace Vendor\Routing;

use App\Controllers\Controller;


class Route {

    public static $routes = [];

    public static function get($uri, $move){
        $method = $_SERVER['REQUEST_METHOD'];
        $array = explode("{", $uri);
        $new_array = array($array[0]);
        $array_search = array_slice($array, 1);
        $get_array = array();
        foreach ($_GET as $k => $value){
            $get_array[] = $value;
        }
        if($_GET){
            foreach ($array_search as $k => $arr) {
                if(count($_GET) == count($array_search))
                $new_array[] = preg_replace("/\w+}/",$get_array[$k], $arr);
            }
        }
        $uri = (implode($new_array));
        if($method == 'GET' && $uri == urldecode($_SERVER['REQUEST_URI'])) {
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $name = "name";
            $controller = 'App\Controllers\\'.$controller;
            $objectController = new $controller;
            $objectController->$method($name);
            self::$routes[] = $uri;
        }

    }
    public static function post($uri, $move){
        $method = $_SERVER['REQUEST_METHOD'];
        if ( $method == 'POST' &&  $uri == urldecode($_SERVER['REQUEST_URI']) ) {
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $controller = 'App\Controllers\\'.$controller;
            $objectController = new $controller;
            $objectController->$method();
            self::$routes[] = $uri;
        }

    }

}


