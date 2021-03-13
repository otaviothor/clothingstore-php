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
    $data = [
      "id" => 1,
      "name" => "otávio barreto",
      "login" => "otaviothor",
      "email" => "otavio@gmail.com",
      "image" => "avatar.svg",
      "user_type" => 3,
      "cpf" => "999.999.999-99",
    ];

    echo $this->view->render("profile", [
      "title" => "otávio barreto",
      "data" => $data
    ]);
  }
}
