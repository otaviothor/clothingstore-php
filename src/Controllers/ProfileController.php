<?php

namespace Src\Controllers;

use Src\Models\User;

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

  public function store(array $data): void
  {
    $userData = filter_var_array($data, FILTER_SANITIZE_STRING);

    $user = new User();
    $user->name = $data["name"];
    $user->login = $data["login"];
    $user->email = $data["email"];
    $user->password = $data["password"];
    $user->user_type = $data["user_type"];
    $user->save();
    print_r($user);
  }
}
