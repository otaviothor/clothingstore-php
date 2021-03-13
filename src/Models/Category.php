<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Src\Models
 */
class Category extends DataLayer
{
  /** User constructor. */
  public function __construct()
  {
    parent::__construct("categories", ["category"]);
  }
}
