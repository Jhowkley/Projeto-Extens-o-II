<?php

abstract class RouteSwitch
{

    public function login()
    {
        require __DIR__ . '/auth/form_login.html';
    }
    public function logout()
    {
        require __DIR__ . '/auth/logout.php';
    }
    public function cadastrar()
    {
        require __DIR__ . '/auth/user/cadastrar.php';
    }
    public function home()
    {
        require __DIR__ . '/pages/home.php';
    }
    public function item()
    {
        require __DIR__ . '/pages/items.php';
    }
    public function resgatar()
    {
        require __DIR__ . '/pages/resgatar.php';
    }
    public function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/pages/not-found.php';
    }
}