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
    echo $this->view->render("products", [
      "title" => "wear.up | Produtos"
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
