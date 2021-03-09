<?php

namespace Src\Controllers;

class ProductController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
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
      ], [
        "id" => "9",
        "name" => "Camiseta 9",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "10",
        "name" => "Camiseta 10",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "11",
        "name" => "Camiseta 11",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "12",
        "name" => "Camiseta 12",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "13",
        "name" => "Camiseta 13",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "14",
        "name" => "Camiseta 14",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "15",
        "name" => "Camiseta 15",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ], [
        "id" => "16",
        "name" => "Camiseta 16",
        "price" => rand(1, 200),
        "image" => "bg2.jpeg",
      ],
    ];

    echo $this->view->render("products", [
      "title" => "wear.up | produtos",
      "products" => $products
    ]);
  }

  public function show(array $data): void
  {
    $product = [
      "id" => $data["id"],
      "name" => "Camiseta {$data["id"]}",
      "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. At similique delectus quisquam rerum distinctio! Ipsum illum assumenda, sit cupiditate nisi aperiam eveniet ex at consequatur voluptatum. Qui molestiae, voluptate in optio labore quae quaerat animi nesciunt! Quaerat, atque qui? Illum nobis, hic repellat excepturi voluptatum amet, libero molestiae molestias rerum, dolorem inventore veniam. Tempora doloribus ea commodi quis voluptatum voluptas nesciunt repudiandae aspernatur iure. Maxime sed quo repellendus possimus deleniti, sapiente voluptatum sequi quod commodi! A fugit ipsa asperiores odio vel repellendus at commodi beatae eum, expedita, dolore ea in natus excepturi. Dolor nostrum et modi consequuntur similique. Sapiente, corrupti?",
      "price" => rand(1, 200),
      "image" => "bg2.jpeg",
      "category_id" => $data["id"],
      "category" => "Camiseta {$data["id"]}",
      "brand_id" => $data["id"],
      "brand" => "Nike Inc. {$data["id"]}",
    ];

    echo $this->view->render("product", [
      "title" => $product["name"],
      "product" => $product
    ]);
  }
}
