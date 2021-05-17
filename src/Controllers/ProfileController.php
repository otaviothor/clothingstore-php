<?php

namespace Src\Controllers;

use Src\Models\User;
use Src\Models\CNPJ;
use Src\Models\CPF;
use Exception;
use stdClass;

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
    try {
      $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

      $user = new User();
      $user->name = $data["name"];
      $user->login = $data["login"];
      $user->email = $data["email"];
      $user->password = password_hash($data["password"], PASSWORD_DEFAULT);
      $user->user_type = $data["user_type"];
      $user->save();

      if ($data["user_type"] === "2") {
        $cnpj = new CNPJ();
        $cnpj->cnpj = $data["cnpj"];
        $cnpj->user_id = $user->id;
        $cnpj->save();
      } else {
        $cpf = new CPF();
        $cpf->cpf = $data["cpf"];
        $cpf->user_id = $user->id;
        $cpf->save();
      }

      echo $this->response(true, "usuário cadastrado com sucesso", [
        "redirect" => $this->router->route("web.index")
      ]);
    } catch (Exception $e) {
      echo $this->response(false, "Erro ao cadastrar usuário");
      return;
    }
  }
}
