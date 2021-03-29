<?php

namespace Src\Controllers\Admin;

use Src\Controllers\Controller;

class AdminController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    echo $this->view->render("admin/dashboard", [
      "title" => "wear.up | dashboard"
    ]);
  }
}
