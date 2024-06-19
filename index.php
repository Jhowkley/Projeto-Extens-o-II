<?php
require 'autoload.php';
require_once __DIR__ . '/Router.php';

$requestUri = $_SERVER['REQUEST_URI'];

$router = new Router;
$router->run($requestUri);


define('DS', DIRECTORY_SEPARATOR);

define('DIR_APP', __DIR__);