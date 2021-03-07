<?php

namespace Src\Controllers;

/**
 * Class WebController
 * @package Src\Controllers
 */
class WebController extends Controller
{
  /**
   * WebController constructor.
   * @param $router
   */
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    $brand = [
      "id" => "1",
      "full_name" => "Marca top",
      "image" => "avatar.svg",
    ];

    $product = [
      "id" => "1",
      "name" => "Camiseta",
      "price" => "",
      "image" => "bg2.jpeg",
    ];

    echo $this->view->render("home", [
      "title" => "wear.up | Home",
      "products" => $product,
      "brands" => $brand,
    ]);
  }

  public function login(): void
  {
    echo $this->view->render("login", [
      "title" => "wear.up | Login"
    ]);
  }

  public function register(): void
  {
    echo $this->view->render("register", [
      "title" => "wear.up | Cadastro"
    ]);
  }

  /**
   * Show error page with error code
   * @param array $data
   */
  public function error(array $data): void
  {
  }
}
