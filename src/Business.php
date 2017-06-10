<?php

namespace Acme;
use Acme\users\Person;

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
