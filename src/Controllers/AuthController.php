<?php

namespace Src\Controllers;

use Src\Models\User;
use Src\Models\CNPJ;
use Src\Models\CPF;
use Src\Support\Session;
use Exception;
use stdClass;

class AuthController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function register(array $data): void
  {
    try {
      $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

      $user = new User();
      $user->name = $data["name"];
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

      Session::put("user", $user->id);

      echo $this->response(true, "usuário cadastrado com sucesso", [
        "redirect" => $this->router->route("web.index")
      ]);
      return;
    } catch (Exception $e) {
      echo $this->response(false, "erro ao cadastrar usuário", [
        "error" => $e->getMessage
      ]);
      return;
    }
  }

  public function login(array $data): void
  {
    $email = filter_var($data["email"], FILTER_VALIDATE_EMAIL);
    $password = filter_var($data["password"], FILTER_DEFAULT);

    if (!$email || !$password) {
      echo $this->response(false, "informe seu e-mail e senha para logar");
      return;
    }

    $user = (new User())->find("email = :email", "email={$email}")->fetch();
    if (!$user || !password_verify($password, $user->password)) {
      echo $this->response(false, "e-mail ou senha inválido");
      return;
    }

    Session::put("user", $user->id);
    echo $this->response(true, "usuário logado com sucesso", [
      "redirect" => $this->router->route("web.index")
    ]);
  }

  public function logout(): void
  {
    unset($_SESSION["user"]);
    $this->router->redirect("web.index");
  }
}
