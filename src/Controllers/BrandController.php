<?php

namespace Src\Controllers;

class BrandController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    echo $this->view->render("brands", [
      "title" => "wear.up | marcas"
    ]);
  }

  public function show(array $data): void
  {
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
      ]
    ];

    echo $this->view->render("brand", [
      "title" => $data["id"],
      "products" => $products,
    ]);
  }
}
