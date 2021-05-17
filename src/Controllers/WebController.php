<?php

namespace Src\Controllers;

use Src\Support\Session;
use Src\Models\Category;

class WebController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    $categories = (new Category())->find()->fetch(true);
    $brands = [
      [
        "id" => "1",
        "name" => "Marca top 1",
        "image" => "avatar.svg",
      ]
    ];

    $products = [
      [
        "id" => "1",
        "name" => "Camiseta 1",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ],
    ];

    if (!Session::exists("categories")) {
      Session::put("categories", $categories);
    }

    echo $this->view->render("home", [
      "title" => "wear.up | home",
      "products" => $products,
      "brands" => $brands,
    ]);
  }

  public function login(): void
  {
    echo $this->view->render("login", [
      "title" => "wear.up | login"
    ]);
  }

  public function register(): void
  {
    echo $this->view->render("register", [
      "title" => "wear.up | cadastro"
    ]);
  }

  public function error(array $data): void
  {
    echo $this->view->render("error", [
      "title" => "error {$data["errcode"]} not found"
    ]);
  }
}
