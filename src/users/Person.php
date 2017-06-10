<?php

namespace Acme\users;
//Las personas están unidas al staff
class Person{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}
