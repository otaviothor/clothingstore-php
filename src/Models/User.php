<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Src\Models
 */
class User extends DataLayer
{
  /** User constructor. */
  public function __construct()
  {
    parent::__construct("users", ["name", "email", "password", "user_type"]);
  }
}
