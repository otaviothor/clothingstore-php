<?php

namespace Src\Controllers;

class CategoryController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function show(array $data): void
  {
    $products = [
      [
        "id" => "1",
        "name" => "{$data["id"]} 1",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "2",
        "name" => "{$data["id"]} 2",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "3",
        "name" => "{$data["id"]} 3",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "4",
        "name" => "{$data["id"]} 4",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "5",
        "name" => "{$data["id"]} 5",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "6",
        "name" => "{$data["id"]} 6",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "7",
        "name" => "{$data["id"]} 7",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "8",
        "name" => "{$data["id"]} 8",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "9",
        "name" => "{$data["id"]} 9",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "10",
        "name" => "{$data["id"]} 10",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "11",
        "name" => "{$data["id"]} 11",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "12",
        "name" => "{$data["id"]} 12",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "13",
        "name" => "{$data["id"]} 13",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "14",
        "name" => "{$data["id"]} 14",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "15",
        "name" => "{$data["id"]} 15",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "16",
        "name" => "{$data["id"]} 16",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ],
    ];

    echo $this->view->render("category", [
      "title" => $data["id"],
      "products" => $products
    ]);
  }


  public function create()
  {
    $categories = [
      [
        "id" => 1,
        "category" => "blusa",
      ], [
        "id" => 2,
        "category" => "camiseta",
      ], [
        "id" => 3,
        "category" => "calça",
      ], [
        "id" => 4,
        "category" => "shorts",
      ], [
        "id" => 5,
        "category" => "social",
      ], [
        "id" => 6,
        "category" => "suéter",
      ]
    ];

    echo $this->view->render("category-form", [
      "title" => "wear.up | nova categoria",
      "titleForm" => "cadastrar nova categoria",
      "categories" => $categories,
    ]);
  }
}
