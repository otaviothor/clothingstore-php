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
    echo $this->view->render("brand", [
      "title" => $data["id"],
    ]);
  }
}
