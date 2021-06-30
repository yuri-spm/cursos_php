<?php
 require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

/**
 * Controllers
 */

$router->namespace("Source\App");

/**
 * WEB
 * home
 */
$router->group(null);
$router->get("/", "Web:home");
$router->get("/{filter}", "Web:home");



/**
 *blog
 */

$router->group("blog");
$router->get("/", "Web:blog");
$router->get("/{post_uri}","Web:post");
$router->get("categoria", "Web:category");
$router->get("/suporte", "Web:support");


/**
 * Contato
 */

$router->group("contato");
$router->get("/", "Web:contact");
$router->post("/", "Web:contact");
$router->delete("/", "Web:contact");
$router->get("/{sector}", "Web/contact");
$router->get("/suporte", "Web:support");


/**
 * ADMIN
 */

$router->group("admin");
$router->get("/", "Admin:home");




/**
 * ERROS
 */

$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();


if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}

