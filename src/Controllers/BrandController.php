<?php

namespace Src\Controllers;

/**
 * Class WebController
 * @package Src\Controllers
 */
class BrandController extends Controller
{
  /**
   * WebController constructor.
   * @param $router
   */
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    echo $this->view->render("home", [
      "title" => "wear.up | Home"
    ]);
  }

  public function login(): void
  {
    echo $this->view->render("login", [
      "title" => "wear.up | Login"
    ]);
  }

  public function register(): void
  {
    echo $this->view->render("register", [
      "title" => "wear.up | Cadastro"
    ]);
  }

  /**
   * Show error page with error code
   * @param array $data
   */
  public function error(array $data): void
  {
  }
}
