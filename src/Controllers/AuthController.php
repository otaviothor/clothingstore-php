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
      unset($data["password"]);
      $data["id"] = $user->id;

      if ($data["user_type"] === "2") {
        $cnpj = new CNPJ();
        $cnpj->cnpj = $data["cnpj"];
        $cnpj->user_id = $user->id;
        $cnpj->save();
        unset($data["cpf"]);
      } else {
        $cpf = new CPF();
        $cpf->cpf = $data["cpf"];
        $cpf->user_id = $user->id;
        $cpf->save();
        unset($data["cnpj"]);
      }

      Session::put("user", $data);

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

  }

  public function logout(): void
  {
    unset($_SESSION["user"]);
    $this->router->redirect("web.index");
  }
}
