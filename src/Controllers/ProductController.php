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
      ],
    ];

    echo $this->view->render("products", [
      "title" => "wear.up | produtos",
      "products" => $products
    ]);
  }

  public function create()
  {
    echo $this->view->render("product-form", [
      "title" => "wear.up | novo produto",
      "titleForm" => "cadastrar novo produto",
    ]);
  }

  public function show(array $data): void
  {
    $product = [
      "id" => $data["id"],
      "name" => "camiseta {$data["id"]}",
      "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. At similique delectus quisquam rerum distinctio! Ipsum illum assumenda, sit cupiditate nisi aperiam eveniet ex at consequatur voluptatum. Qui molestiae, voluptate in optio labore quae quaerat animi nesciunt! Quaerat, atque qui? Illum nobis, hic repellat excepturi voluptatum amet, libero molestiae molestias rerum, dolorem inventore veniam.",
      "price" => rand(1, 200),
      "image" => "bg2.jpeg",
      "category_id" => $data["id"],
      "category" => "categoria {$data["id"]}",
      "brand_id" => $data["id"],
      "brand" => "nike inc. {$data["id"]}",
    ];

    echo $this->view->render("product", [
      "title" => $product["name"],
      "product" => $product
    ]);
  }
}
