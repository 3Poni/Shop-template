<?php

namespace Vendor\Routing;


class RouteDispatcher
{
    private string $requestUri = '/';
    private array $middlewareAllowed;
    private array $paramMap = [];
    private array $paramRequestMap = [];
    private RouteConfiguration $routeConfiguration;

    /**
     * RouteDispatcher constructor.
     * @param RouteConfiguration $routeConfiguration
     */
    public function __construct(RouteConfiguration $routeConfiguration, $middlewareAllowed)
    {
        $this->routeConfiguration = $routeConfiguration;
        $this->middlewareAllowed = $middlewareAllowed;
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
            // 1 check middleware and if true run $this->render();
            if ($this->middleware()) {
                $this->render();
            }
            header('Location: /404');
            // throw new exception NotAllowedException(405)
        }
    }
    private function middleware(): bool
    {
        // decide where from to execute middleware(bind in app array by name, or concrete path)
        if(empty($this->routeConfiguration->middleware)) return true;
        $middlewareArray = explode(',', $this->routeConfiguration->middleware);

        foreach($middlewareArray as $name) {
            if ( !empty($this->middlewareAllowed[0][$name])) {
                return $this->middlewareAllowed[0][$name]->process();
            }
        }

        return false;
    }

    private function render()
    {
        $ClassName = 'App\Controllers\\'. $this->routeConfiguration->controller;
        $action = $this->routeConfiguration->action;
        (new $ClassName)->$action(...$this->paramRequestMap);
        die();
    }
}


