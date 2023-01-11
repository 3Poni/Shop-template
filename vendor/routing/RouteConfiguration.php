<?php

namespace Vendor\Routing;


class RouteConfiguration
{
    public string $route;
    public string $controller;
    public string $action;

    /**
     * RouteConfiguration constructor.
     * @param string $route
     * @param string $controller
     * @param string $action
     */
    public function __construct(string $route, string $controller, string $action)
    {
        $this->route = $route;
        $this->controller = $controller;
        $this->action = $action;
    }
}


