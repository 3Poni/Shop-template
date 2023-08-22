<?php

namespace Vendor\Routing;

class App
{
    private static array $routes = [];

    public static function run()
    {
        $requestMethod = ucfirst(strtolower($_SERVER['REQUEST_METHOD']));
        $methodName = 'getRoutes' . $requestMethod;
        foreach (Route::$methodName() as $routeConfiguration) {
            $routeDispatcher = new RouteDispatcher($routeConfiguration);
            $routeDispatcher->process();
            self::$routes [] = $routeDispatcher->getRoute();
        }
        if (!in_array(urldecode($_SERVER['REQUEST_URI']), self::$routes)) {
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
            echo '404 - страница не найдена';
        }
    }

}


