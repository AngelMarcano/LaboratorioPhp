<?php

class Math {

public static function add()
{
  return array_sum(func_get_args());
}
}

echo Math::add(1,2,3);


class Person{
  public $age = 1;

  public function haveBirthday()
  {
    $this->age += 1;
  }

  public function age(){
    return $this->age;
  }
}

$joe = new Person;

$joe->haveBirthday();
$joe->haveBirthday();

echo $joe->age();

$jane = new Person;
$jane->haveBirthday();
echo $jane->age();


echo $joe->age;
