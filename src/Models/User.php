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

  public function document()
  {
    if ($this->user_type === "3") {
      $document = (new CPF())->find("user_id = :uid", "uid={$this->id}")->fetch(true);
    } else {
      $document = (new CNPJ())->find("user_id = :uid", "uid={$this->id}")->fetch(true);
    }

    return $document;
  }
}
