<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Src\Models
 */
class CPF extends DataLayer
{
  /** User constructor. */
  public function __construct()
  {
    parent::__construct("cpf", ["cpf", "user_id"]);
  }
}
