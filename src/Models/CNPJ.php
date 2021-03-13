<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Src\Models
 */
class CNPJ extends DataLayer
{
  /** User constructor. */
  public function __construct()
  {
    parent::__construct("cnpj", ["cnpj", "user_id"]);
  }
}
