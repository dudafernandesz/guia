<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/livros", "Web:books");
$route->get("/sobre", "Web:about");
$route->get("/contato", "Web:contact");
$route->get("/entrar","Web:register");
$route->get("/login","Web:login");
$route->get("/perfil","Web:profile");
$route->get("/comunidade","Web:comunity");
$route->get("/faqs","Web:faqs");
$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");

$route->get("/", "App:home");
$route->get("/perfil", "App:profile");
$route->get("/mensagens", "App:messages");
$route->get("/livros", "App:books");
$route->get("/configuracao", "App:configs");
//$route->get("/carrinho", "App:cart");

$route->group(null);

$route->group("/adm");

$route->get("/", "Admin:home");
$route->get("/login","Admin:login");
$route->get("/livros","Admin:books");
$route->get("/dash","Admin:dash");
$route->get("/novo","Admin:newProduct");
$route->get("/produto","Admin:product");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();