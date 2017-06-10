<?php

//Las personas están unidas al staff
class Person{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}

//Este modelo tiene dependencias, por lo que es altamente acoplado
//Los negocios contratan personas
class Business{
protected $staff;

public function __construct(Staff $staff)
{
  $this->staff = $staff;
}

  public function hire(Person $person )
  {
    //agregar persona a la collección de staff
    $this->staff->add($person);
  }
  //Método de negocio (Business) que permite mostrar todas las personas del Staff
  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}

class Staff{
  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }
  //Método que agrega personas a la colección de staff
  public function add(Person $person)
  {
    $this->members[] = $person;
  }
  //Método que retorna el arreglo de members
  public function members()
  {
    return $this->members;
  }
}

$jeffrey = new Person('Jeffrey way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);
$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());
