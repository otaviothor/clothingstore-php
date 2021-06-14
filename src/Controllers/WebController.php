<?php

namespace Src\Controllers;

use Src\Support\Session;
use Src\Models\User;
use Src\Models\Category;
use Src\Models\Product;
use stdClass;

class WebController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    if (!Session::exists("categories")) {
      $categoriesData = (new Category())->find()->fetch(true);
      $categories = [];

      if ($categoriesData) {
        foreach ($categoriesData as $key => $categoryData) {
          $categoryObject = new stdClass();
          $categoryObject->id = $categoryData->id;
          $categoryObject->category = $categoryData->category;
          $categories[$key] = $categoryObject;
        }
      }

      Session::put("categories", $categories);
    }

    $brands = (new User())->find("user_type = :utype", "utype=2")->limit(6)->order("RAND()")->fetch(true);
    $products = (new Product())->find(null, null, "id, name, price, image")->limit(4)->order("RAND()")->fetch(true);

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
