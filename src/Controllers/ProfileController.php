<?php

namespace Src\Controllers;

use Src\Models\User;
use Src\Models\CNPJ;
use Src\Models\CPF;
use Src\Support\Session;
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
    $userId = Session::get("user");
    $user = (new User())->findById($userId);
    $document = $user->document();

    echo $this->view->render("profile", [
      "title" => "otávio barreto",
      "user" => $user,
      "document" => $document,
    ]);
  }

  public function update(array $data): void
  {
    $image = $_FILES;
    var_dump($image);
    var_dump($data);
  }
}
