<?php

class Person{
  public $name;
  private $age;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function setAge($age)
  {
    if($age < 18)
    {
      throw new Exception("Persona no tiene suficiente edad");
    }
    $this->age = $age;
  }

  public function getAge()
  {
    return $this->age * 365;
  }
}

$john = new Person('John Doe');


$john->setAge(30);
$john->getAge();
var_dump($john->getAge());
