<?php

use Cascata\Framework\Http\Response;
use Cascata\Framework\Routing\RouteGrouper;

$routeGrouper = new RouteGrouper();

$routeGrouper->addRoute('GET', '/', function () {
    return new Response('CASCATAAAAAAAAAAAAA');
});