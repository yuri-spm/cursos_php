<?php

use CoffeeCode\Router\Router;
use League\Plates\Engine;

require __DIR__ . "/vendor/autoload.php";

$route = new Router(ROOT);
$route->namespace("Source\Controllers");

$route->group(null);
$route->get("/","Form:home","form.home");
$route->post("/create","Form:create","form.create");
$route->post("/delete","Form:delete","form.delete");

$route->dispatch();

if ($route->error()) {
    var_dump($route->error());
}