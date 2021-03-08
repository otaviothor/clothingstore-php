<?php

namespace Src\Controllers;

class ProfileController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    echo $this->view->render("profile", [
      "title" => "otávio barreto"
    ]);
  }
}
