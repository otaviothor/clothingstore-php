<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Src\Models
 */
class Product extends DataLayer
{
  /** User constructor. */
  public function __construct()
  {
    parent::__construct("products", ["name", "price", "image", "category_id", "brand_id"]);
  }
}
