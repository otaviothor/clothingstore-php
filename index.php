<?php

ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

/** @var Router */
$router = new Router(site());
$router->namespace("Src\Controllers");

/** Routes */
$router->group(null);
$router->get("/", "WebController:index", "web.index");
$router->get("/login", "WebController:login", "web.login");
$router->get("/cadastro", "WebController:register", "web.register");

/** Routes product */
$router->group("produtos");
$router->get("/", "ProductController:index", "product.index");
$router->get("/{id}", "ProductController:show", "product.show");
$router->post("/create", "ProductController:create", "product.create");
$router->post("/update", "ProductController:update", "product.update");
$router->post("/delete", "ProductController:delete", "product.delete");

/** Routes category */
$router->group("categorias");
$router->get("/{id}", "CategoryController:show", "category.show");
$router->post("/create", "CategoryController:create", "category.create");
$router->post("/update", "CategoryController:update", "category.update");
$router->post("/delete", "CategoryController:delete", "category.delete");

/** Routes brand */
$router->group("marcas");
$router->get("/", "BrandController:index", "brand.index");
$router->get("/{id}", "BrandController:show", "brand.show");

/** Routes profile */
$router->group("perfil");
$router->get("/", "ProfileController:index", "profile.index");
$router->post("/update", "ProfileController:update", "profile.update");
$router->post("/delete", "ProfileController:delete", "profile.delete");

/** Route errors */
$router->group("ops");
$router->get("/{errcode}", "WebController:error", "web.error");

/** Route proccess */
$router->dispatch();

/** Errors proccess */
if ($router->error()) {
  $router->redirect("web.error", [
    "errcode" => $router->error()
  ]);
}

ob_end_flush();
