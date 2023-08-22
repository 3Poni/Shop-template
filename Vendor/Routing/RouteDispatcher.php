<?php

namespace Vendor\Routing;


class RouteDispatcher
{
    private string $requestUri = '/';
    private array $paramMap = [];
    private array $paramRequestMap = [];
    private RouteConfiguration $routeConfiguration;

    /**
     * RouteDispatcher constructor.
     * @param RouteConfiguration $routeConfiguration
     */
    public function __construct(RouteConfiguration $routeConfiguration)
    {
        $this->routeConfiguration = $routeConfiguration;
    }

    public function process()
    {
        $this->setParamMap();
        $this->run();
    }

    public function getRoute(): string
    {
        return $this->routeConfiguration->route;
    }

    private function setParamMap()
    {
        $routeArray = explode('{', $this->routeConfiguration->route);
        $this->paramMap = array($routeArray[0]);
        $this->paramRequestMap = array_slice($routeArray, 1);
        $getArray = array();
        foreach ($_GET as $k => $value) {
            $getArray[] = $value;
        }
        if($_GET){
            foreach ($this->paramRequestMap as $k => $arr) {
                if(count($_GET) == count($this->paramRequestMap))
                    $this->paramMap[] = preg_replace("/\w+}/",$getArray[$k], $arr);
            }
        }
        $this->routeConfiguration->route = (implode($this->paramMap));
    }

    private function run()
    {
        if ($this->routeConfiguration->route == urldecode($_SERVER['REQUEST_URI'])) {
            $this->render();
        }
    }

    private function render()
    {
        $ClassName = 'App\Controllers\\'. $this->routeConfiguration->controller;
        $action = $this->routeConfiguration->action;
        (new $ClassName)->$action(...$this->paramRequestMap);
        die();
    }
}


