<?php

namespace Src\Controllers;

class CategoryController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    echo $this->view->render("categories", [
      "title" => "wear.up | categorias"
    ]);
  }
}
