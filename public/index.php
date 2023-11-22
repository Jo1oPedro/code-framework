<?php

use Cascata\Framework\Http\Kernel;
use Cascata\Framework\Http\Request;
use Cascata\Framework\Routing\Router;

require __DIR__ . '/../vendor/autoload.php';

define("BASE_PATH", dirname(__DIR__));

$request = Request::createFromGlobals();

$router = new Router();

$kernel = new Kernel($router);

$kernel->handle($request)->send();