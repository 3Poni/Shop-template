<?php

namespace Vendor\Routing;


class Route
{
    private static array $routesGet = [];
    private static array $routesPost = [];

    /**
     * @return array
     */
    public static function getRoutesGet(): array
    {
        return self::$routesGet;
    }
    /**
     * @return array
     */
    public static function getRoutesPost(): array
    {
        return self::$routesPost;
    }

    public static function get(string $route, string $controller): RouteConfiguration
    {
        $controller = explode('@', $controller);
        $routeConfiguration = new RouteConfiguration($route, $controller[0], $controller[1]);
        self::$routesGet[] = $routeConfiguration;
        return $routeConfiguration;
    }
    public static function post(string $route, string $controller): RouteConfiguration
    {
        $controller = explode('@', $controller);
        $routeConfiguration = new RouteConfiguration($route, $controller[0], $controller[1]);
        self::$routesPost[] = $routeConfiguration;
        return $routeConfiguration;
    }
    public static function redirect($url)
    {
        header('Location: ' . $url);
    }

}


