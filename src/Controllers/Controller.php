<?php

namespace Src\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Src\Support\HttpStatusCode;

abstract class Controller
{
  protected $view;
  protected $router;

  public function __construct($router)
  {
    $this->router = $router;
    $this->view = Engine::create(dirname(__DIR__, 2) . "/views/site", 'php');
    $this->view->addData(["router" => $this->router]);
  }

  public function response(bool $status = true, int $code = 200, string $message = null, array $data = []): string
  {
    HttpStatusCode::setStatusCode($code);

    $callback["status"] = $status;

    if ($message) {
      $callback["message"] = $message;
    }

    if (sizeof($data) > 0) {
      $callback["data"] = $data;
    }

    return json_encode($callback);
  }
}
