<?php

namespace Src\Controllers;

use Src\Support\Session;

class WebController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    $brands = [
      [
        "id" => "1",
        "name" => "Marca top 1",
        "image" => "avatar.svg",
      ], [
        "id" => "2",
        "name" => "Marca top 2",
        "image" => "avatar.svg",
      ], [
        "id" => "3",
        "name" => "Marca top 3",
        "image" => "avatar.svg",
      ], [
        "id" => "4",
        "name" => "Marca top 4",
        "image" => "avatar.svg",
      ], [
        "id" => "5",
        "name" => "Marca top 5",
        "image" => "avatar.svg",
      ], [
        "id" => "6",
        "name" => "Marca top 6",
        "image" => "avatar.svg",
      ], [
        "id" => "7",
        "name" => "Marca top 7",
        "image" => "avatar.svg",
      ], [
        "id" => "8",
        "name" => "Marca top 8",
        "image" => "avatar.svg",
      ], [
        "id" => "9",
        "name" => "Marca top 9",
        "image" => "avatar.svg",
      ], [
        "id" => "10",
        "name" => "Marca top 10",
        "image" => "avatar.svg",
      ], [
        "id" => "11",
        "name" => "Marca top 11",
        "image" => "avatar.svg",
      ], [
        "id" => "12",
        "name" => "Marca top 12",
        "image" => "avatar.svg",
      ]
    ];

    $products = [
      [
        "id" => "1",
        "name" => "Camiseta 1",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "2",
        "name" => "Camiseta 2",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "3",
        "name" => "Camiseta 3",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "4",
        "name" => "Camiseta 4",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "5",
        "name" => "Camiseta 5",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "6",
        "name" => "Camiseta 6",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "7",
        "name" => "Camiseta 7",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "8",
        "name" => "Camiseta 8",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ],
    ];

    $categories = [];

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
