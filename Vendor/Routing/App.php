<?php

namespace Vendor\Routing;

use App\Middleware\AuthMiddleware;
use App\Contracts\MiddlewareInterface;

class App
{
    public array $middlewareList;
    private static array $routes = [];

    public function setMiddleware($name, MiddlewareInterface $middleware): App
    {
        $this->middlewareList[] = [ $name => $middleware ];
        return $this;
    }

    public function run()
    {
        $requestMethod = ucfirst(strtolower($_SERVER['REQUEST_METHOD']));
        $methodName = 'getRoutes' . $requestMethod;
        foreach (Route::$methodName() as $routeConfiguration) {
            $routeDispatcher = new RouteDispatcher($routeConfiguration, $this->middlewareList);
            $routeDispatcher->process();
            self::$routes [] = $routeDispatcher->getRoute();
        }
        if (!in_array(urldecode($_SERVER['REQUEST_URI']), self::$routes)) {
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
            echo '404 - страница не найдена';
        }
    }

}


