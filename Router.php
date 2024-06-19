<?php

require_once __DIR__ . '/RouterSwitch.php';

class Router extends RouteSwitch
{
    public function run(string $requestUri)
    {

        $path = parse_url(substr($requestUri, 1));
        $route = $path['path'];

        if ($route === '') {
            $this->home();
        } else {
            $this->$route();
        }
    }
}